<?php

namespace App\Classes;

class Receita
{
    public function total_receita(\App\Models\Receita $receita){
        $total = 0;

        foreach($receita->receita_ingredientes as $receita_ingrediente){
            $total += $receita_ingrediente->quantidade * $receita_ingrediente->ingrediente->marcas->where("padrao", true)->first()->valor_embalagem / $receita_ingrediente->ingrediente->marcas->where("padrao", true)->first()->quantidade_embalagem;
        };

        foreach($receita->receita_acessorios as $receita_acessorio){
            $total += $receita_acessorio->quantidade * $receita_acessorio->acessorio->marcas->where("padrao", true)->first()->valor_embalagem / $receita_acessorio->acessorio->marcas->where("padrao", true)->first()->quantidade_embalagem;
        };

        return $total;
    }
}
