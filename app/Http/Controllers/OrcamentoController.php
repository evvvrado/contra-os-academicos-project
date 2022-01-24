<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class OrcamentoController extends Controller
{
    public function orcamentoID()
    {
        return view("site.orcamento.id");
    }
    public function orcamentoEVENTO()
    {
        return view("site.orcamento.evento");
    }
    public function orcamentoINFO()
    {
        return view("site.orcamento.info");
    }
    public function orcamentoLISTA()
    {
        return view("site.orcamento.lista");
    }
    public function orcamentoCONFIRM()
    {
        return view("site.orcamento.confirmar");
    }
    public function orcamentoCAR()
    {
        return view("site.orcamento.carrinho");
    }
    public function orcamentoENCERRAR()
    {
        return view("site.orcamento.encerrar");
    }
}
