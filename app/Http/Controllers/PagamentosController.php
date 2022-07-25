<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;
use Omnipay\Omnipay;
use App\Models\UsuarioSite;

class PagamentosController extends Controller
{
    private $gateway;

    public function __construct() {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId('ARGQV_s5LpEy_OHe7ijcz4HMvfSN7HvVCyVDX7MacLbGnK4ElO-uL6r2TV1cCrc38FmAGy-IUYdKDWGF');
        $this->gateway->setSecret('EG5Ln5ytnOMrzRqB7l-5DJla54f0JombP0JIw2BmTbU5_wA_yMujSRoTmH2CwC4_Xd2nkmhRiKZ-3aq0');
        $this->gateway->setTestMode(false);
    }

    public function pay(Request $request)
    {
        try {

            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency' => 'BRL',
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ))->send();

            if ($response->isRedirect()) {
                $response->redirect();
            }
            else{
                return $response->getMessage();
            }

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));

            $response = $transaction->send();

            if ($response->isSuccessful()) {

                $arr = $response->getData();

                $pagamento = new Pagamento();
                $pagamento->pagamento_id = $arr['id'];
                $pagamento->pagador_id = $arr['payer']['payer_info']['payer_id'];
                $pagamento->pagador_email = $arr['payer']['payer_info']['email'];
                $pagamento->valor = $arr['transactions'][0]['amount']['total'];
                $pagamento->moeda = 'BRL';
                $pagamento->pagamento_status = $arr['state'];

                $pagamento->save();

                UsuarioSite::whereEmail($pagamento->pagador_email)
                ->update(['assinante' => 1]);

                return redirect()->route("site.index");

                // return "Payment is Successfull. Your Transaction Id is : " . $arr['id'];

            }
            else{
                return $response->getMessage();
            }
        }
        else{
            return 'Pagamento recusado!';
        }
    }

    public function error()
    {
        return 'Usuário recusou o pagamento!';   
    }
}
