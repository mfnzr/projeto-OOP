<?php

require_once 'Humano.php';

class Animal{
    public $nome;
    public $raca;
    public $quantPatas;
    public $cor;
    public $peso;
    public $tamanho;
    public Humano $humano;
    

    public function __construct($nome, $raca, $quantPatas, $cor, $peso, $tamanho, $humano){
        $this->nome = $nome;
        $this->raca = $raca;
        $this->quantPatas = $quantPatas;
        $this->cor = $cor;
        $this->peso = $peso;
        $this->tamanho = $tamanho;
        $this->humano = $humano;
    }

    public function Falar() {
        return "fala do animal aqui!";
    }
}

