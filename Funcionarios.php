<?php

require_once 'Humano.php';

class Funcionarios extends Humano {
    public $nome;
    public $salario;

    public function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function apresentacao($nome, $salario) {
        return "nome e salário do funcionário aqui!";
    }
}

