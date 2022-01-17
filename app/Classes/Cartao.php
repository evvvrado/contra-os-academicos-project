<?php

namespace App\Classes;

class Cartao{
    public $numero;
    public $cvv;
    public $data_expiracao;
    public $nome;
    public $parcelas;

    public function __construct($numero, $cvv, $data_expiracao, $nome, $parcelas){
        $this->numero = $numero;
        $this->cvv = $cvv;
        $this->data_expiracao = $data_expiracao;
        $this->nome = $nome;
        $this->parcelas = $parcelas;
    }

}

?>