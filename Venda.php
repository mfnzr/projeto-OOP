<?php

require_once 'Humano.php';

class Vendas  {
    public $item;
    public $preco;
    public $quantidade;
    public Humano $humano;

    public function __construct($item, $preco, $quantidade, Humano $humano) {
        $this->item = $item;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->humano = $humano;
    }

    public function vendaProdutos($item, $preco, $quantidade, $humano){
        return ("Nome: {$item} " . "\n" . "Preco: {$preco} " . "\n" . "Quantidade: {$quantidade}" . "\n" . "{$humano->nome}");}
}
