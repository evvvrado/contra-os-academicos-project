<?php

namespace App\Classes\Cielo;

use Cielo\API30\Merchant;
use Cielo\API30\Ecommerce\Environment;
use Cielo\API30\Ecommerce\Sale;
use Cielo\API30\Ecommerce\CieloEcommerce;
use Cielo\API30\Ecommerce\Payment;
use Cielo\API30\Ecommerce\CreditCard;

use Cielo\API30\Ecommerce\Request\CieloRequestException;

class CieloRequisicaoCredito
{

    public $merchant_id;
    public $merchant_key;
    public $merchant;
    public $environment;
    public $sale;
    public $customer;
    public $payment;


    public function __construct()
    {
        if (env("CIELO_ENV") == "sandbox") {
            $this->merchant_id = env("CIELO_MERCHANT_ID_SANDBOX");
            $this->merchant_key = env("CIELO_MERCHANT_KEY_SANDBOX");
            $this->environment = Environment::sandbox();
        } else {
            $this->merchant_id = env("CIELO_MERCHANT_ID");
            $this->merchant_key = env("CIELO_MERCHANT_KEY");
            $this->environment = Environment::production();
        }

        $this->merchant = new Merchant($this->merchant_id, $this->merchant_key);
    }

    public function addSale($codigo)
    {
        $this->sale = new Sale($codigo);
    }

    public function addCustomer($nome)
    {
        $this->customer = $this->sale->customer($nome);
    }

    public function addPayment($valor)
    {
        $this->payment = $this->sale->payment(intval($valor * 100));
        // dd($this->payment);
    }

    public function addCreditCard($numero, $bandeira, $expiracao, $cvv, $nome, $parcelas)
    {
        $this->payment->setType(Payment::PAYMENTTYPE_CREDITCARD)
            ->creditCard($cvv, $bandeira)
            ->setExpirationDate($expiracao)
            ->setCardNumber($numero)
            ->setHolder($nome);
        $this->payment->setInstallments($parcelas);
    }

    public function efetuar()
    {
        try {
            // Configure o SDK com seu merchant e o ambiente apropriado para criar a venda
            $this->sale = (new CieloEcommerce($this->merchant, $this->environment))->createSale($this->sale);
            // dd($this->sale);
            // Com a venda criada na Cielo, já temos o ID do pagamento, TID e demais
            // dados retornados pela Cielo
            $paymentId = $this->sale->getPayment()->getPaymentId();
            $cardNumber = $this->sale->getPayment()->getCreditCard()->getCardNumber();
            // dd($this->sale);
            $return = [
                "status" => 200,
                "retorno" => $this->sale->getPayment()->getReturnCode(),
                "payment_id" => $paymentId,
                "numero" => $cardNumber
            ];
            // dd($return);
            return $return;
            // Com o ID do pagamento, podemos fazer sua captura, se ela não tiver sido capturada ainda
            // $sale = (new CieloEcommerce($merchant, $environment))->captureSale($paymentId, 15700, 0);

            // E também podemos fazer seu cancelamento, se for o caso
            // $sale = (new CieloEcommerce($merchant, $environment))->cancelSale($paymentId, 15700);
        } catch (CieloRequestException $e) {
            // Em caso de erros de integração, podemos tratar o erro aqui.
            // os códigos de erro estão todos disponíveis no manual de integração.
            $error = $e->getCieloError();
            $return = [
                "status" => 300,
                "erro" => $error
            ];

            return $return;
        }
    }

    public function capturar($paymentId, $valor)
    {
        $res = (new CieloEcommerce($this->merchant, $this->environment))->captureSale($paymentId, intval($valor * 100), 0);
    }
}
