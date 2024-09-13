<?php

require_once 'Humano.php';

class Vendas  {
    public $item;
    public $preco;
    public $quantidade;
    public Humano $humano;

    public function __construct($item, $preco, $quantidade) {
        $this->item = $item;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function vendaProdutos($nome, $preco, $quantidade, $humano){
        return ("Nome: {$nome} " . "\n" . "Preco: {$preco} " . "\n" . "Quantidade: {$quantidade}" . "\n" . "{$humano->nome}");}
}
