<?php

class Animal{
    public $nome;
    public $raca;
    public $quantPatas;
    public $cor;
    public $peso;
    public $tamanho;

    public function __construct($nome, $raca, $quantPatas, $cor, $peso, $tamanho){
        $this->nome = $nome;
        $this->raca = $raca;
        $this->quantPatas = $quantPatas;
        $this->cor = $cor;
        $this->peso = $peso;
        
    }

    public function Falar() {
        return "fala do animal aqui!";
    }
}

