<?php

namespace App\Classes;
use App\Models\Parametro;
use App\Models\ServicoParametro;
use App\Models\Servico;

class Orcamento
{

    public static function qtdTiposDrinks($pessoas){
        $parametros = Parametro::first();
        return round(($pessoas * $parametros->tipos_drinks_numero) / $parametros->tipos_drinks_convidados);
    }

    public static function qtdDrinks($pessoas){
        $parametros = Parametro::first();
        return round(($pessoas * $parametros->drinks_numero) / $parametros->drinks_convidados);
    }

    public static function qtdIdealServicos(Servico $servico, $pessoas){
        $parametro = ServicoParametro::where([["quantidade_minima_pessoas", "<=", $pessoas], ["quantidade_maxima_pessoas", ">=", $pessoas]])->first();
        if($parametro){
            return $parametro->quantidade_maxima_servico;
        }else{
            return "ERRO";
        }
    }

    public static function qtdMinimaServicos(Servico $servico, $pessoas){
        $parametro = ServicoParametro::where([["quantidade_minima_pessoas", "<=", $pessoas], ["quantidade_maxima_pessoas", ">=", $pessoas]])->first();
        if($parametro){
            return $parametro->quantidade_minima_servico;
        }else{
            return "ERRO";
        }
    }
}
