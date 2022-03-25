<?php

namespace App\Classes;
use App\Models\Parametro;
use App\Models\ServicoParametro;
use App\Models\Servico;
use App\Models\Marca;
use App\Models\OrcamentoDesconto;

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

    public static function qtdEmbalagensUsadas(Marca $marca, $qtd){
        return ceil($marca->quantidade_ingrediente_unidade * $qtd / $marca->quantidade_embalagem);
    }

    public static function aplicaDesconto(OrcamentoDesconto $desconto = null, $valor){
        if($desconto){
            if($desconto->tipo === 0){
                return ($valor - $desconto->valor);
            }
            if($desconto->tipo === 1){
                return ($valor - ($valor * $desconto->valor) / 100);
            }
        }else{
            return $valor;
        }
    }
}
