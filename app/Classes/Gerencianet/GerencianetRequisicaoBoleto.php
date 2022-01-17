<?php

namespace App\Classes\Gerencianet;
use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;
use Illuminate\Support\Facades\Log;

class GerencianetRequisicaoBoleto{

    public $clientId;
    public $clientSecret;
    public $options;
    public $items = array();
    public $notify_url;
    public $customer;
    public $juros_mora;
    public $discount;
    public $conditional_discount;
    public $boleto;
    public $parcelas;

    public function __construct(){
        
        if(env('GERENCIANET_ENV') == 'sandbox'){
            $this->clientId = env('GERENCIANET_CLIENT_SANDBOX');
            $this->clientSecret = env('GERENCIANET_SECRET_SANDBOX');
            $this->notify_url = env('GERENCIANET_NOTIFY');
            $this->options = [
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'sandbox' => true // altere conforme o ambiente (true = homologação e false = producao)
            ];
        }else{
            $this->clientId = env('GERENCIANET_CLIENT');
            $this->clientSecret = env('GERENCIANET_SECRET');
            $this->notify_url = env('GERENCIANET_NOTIFY');
            $this->options = [
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'sandbox' => false, // altere conforme o ambiente (true = homologação e false = producao)
            ];
        }
            
    }

    public function addCustomer($customer){
        $this->customer = $customer;
    }

    public function addItem($item){
        $this->items[] = $item;
    }

    public function addJurosMora($juros_mora){
        $this->juros_mora = $juros_mora;
    }

    public function addDesconto($discount){
        $this->discount = $discount;
    }

    public function addDescontoCondicional($conditional_discount){
        $this->conditional_discount = $conditional_discount;
    }

    public function addBoleto($boleto){
        $boleto['customer'] = $this->customer;
        if($this->discount)
            $boleto['discount'] = $this->discount;
        if($this->conditional_discount)
            $boleto['conditional_discount'] = $this->conditional_discount;
        $this->boleto = $boleto;
    }

    public function addParcelas($parcelas){
        $this->parcelas = intval($parcelas);
    }

    public function gerarBoleto(){
        $payment = [
            'banking_billet' => $this->boleto
        ];
        $body = [
            'items' => $this->items,
            'metadata' => [
                'notification_url' => $this->notify_url
            ],
            'payment' => $payment
        ];
        try {
            $api = new Gerencianet($this->options);
            $pay_charge = $api->oneStep([],$body);
            return $pay_charge;
            
        } catch (GerencianetException $e) {
            Log::channel('boletos')->error('ERRO:' . $e->error . "\n" . $e->errorDescription);
            print_r($e->code);
            print_r($e->error);
            print_r($e->errorDescription);
            die();
        } catch (Exception $e) {
            Log::channel('boletos')->error('ERRO:' . $e->getMessage());
            print_r($e->getMessage());
            die();
        }
    }

    public function gerarCarne(){
        $body = [
            'items' => $this->items,
            'customer' => $this->customer,
            'expire_at' => date("Y-m-d", strtotime("+15 days")),
            'repeats' => $this->parcelas,
            'metadata' => [
                'notification_url' => $this->notify_url
            ],
            'split_items' => true
        ];
        // dd($body);
        try {
            $api = new Gerencianet($this->options);
            $pay_charge = $api->createCarnet([],$body);
            // dd($pay_charge);
            return $pay_charge;
            
        } catch (GerencianetException $e) {
            Log::channel('boletos')->error('ERRO:' . $e->code . " - " . $e->error . "\n" . $e->errorDescription);
            $return = [
                "code" => $e->code,
                "erro" => $e->error,
                "descricao" => $e->errorDescription
            ];
            // print_r($e->code);
            // print_r($e->error);
            // print_r($e->errorDescription);
            return $return;
        } catch (Exception $e) {
            Log::channel('boletos')->error('ERRO:' . $e->getMessage());
            $return = [
                "code" => -1,
                "erro" => $e->getMessage(),
                "descricao" => "Erro geral"
            ];
            return $return;
        }
    }

    public function alterarDataBoleto($charge_id, $nova_data){
        $params = [
            'id' => $charge_id
        ];
        
        $body = [
            'expire_at' => $nova_data
        ];
        
        try {
            $api = new Gerencianet($this->options);
            $charge = $api->updateBillet($params, $body);
            return 200;
        } catch (GerencianetException $e) {
            print_r($e->code);
            print_r($e->error);
            print_r($e->errorDescription);
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }

    public function enviarBoletoEmail($charge_id, $email){
        $params = [
            'id' => $charge_id
        ];
        
        $body = [
            'email' => $email
        ];
        
        try {
            $api = new Gerencianet($this->options);
            $response = $api->resendBillet($params, $body);
            print_r($response);
        } catch (GerencianetException $e) {
            print_r($e->code);
            print_r($e->error);
            print_r($e->errorDescription);
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }

    public function cancelarTransacao($charge_id){
        $params = [
            'id' => $charge_id
        ];
           
        try {
            $api = new Gerencianet($this->options);
            $charge = $api->cancelCharge($params, []);
            return 200;
        } catch (GerencianetException $e) {
            print_r($e->code);
            print_r($e->error);
            print_r($e->errorDescription);
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }

    public function notificacao($token){
        $params = [
            'token' => $token
          ];
           
          try {
              $api = new Gerencianet($this->options);
              $chargeNotification = $api->getNotification($params, []);
            // Para identificar o status atual da sua transação você deverá contar o número de situações contidas no array, pois a última posição guarda sempre o último status. Veja na um modelo de respostas na seção "Exemplos de respostas" abaixo.
            
            // Veja abaixo como acessar o ID e a String referente ao último status da transação.
              
              // Conta o tamanho do array data (que armazena o resultado)
              $i = count($chargeNotification["data"]);
              // Pega o último Object chargeStatus
              $ultimoStatus = $chargeNotification["data"][$i-1];
              // Acessando o array Status
              $status = $ultimoStatus["status"];
              // Obtendo o ID da transação    
              $charge_id = $ultimoStatus["identifiers"]["charge_id"];
              // Obtendo a String do status atual
              $statusAtual = $status["current"];
              
              // Com estas informações, você poderá consultar sua base de dados e atualizar o status da transação especifica, uma vez que você possui o "charge_id" e a String do STATUS
            $return = [
                "code" => 200,
                "charge_id" => $charge_id,
                "status" => $statusAtual
            ];
            // echo "O id da transação é: ".$charge_id." seu novo status é: ".$statusAtual;
            return $return;
              //print_r($chargeNotification);
          } catch (GerencianetException $e) {
            $return = [
                "code" => $e->code,
                "erro" => $e->error,
                "descricao" => $e->errorDescription
            ];
            //   print_r($e->code);
            //   print_r($e->error);
            //   print_r($e->errorDescription);
            return $return;
              
          } catch (Exception $e) {
            $return = [
                "code" => -1,
                "erro" => $e->getMessage(),
            ];
            return $return;
          }
    }

}

?>