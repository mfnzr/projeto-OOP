<?php

class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    public function __construct($nome, $preco, $quantidade){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }



}

