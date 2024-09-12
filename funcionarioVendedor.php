<?php

require_once 'Funcionarios.php';

class Vendedor extends Funcionarios {
    
    public function apresentacao($nome, $salario) {
        return ("Nome: {$nome} " . "\n" . "Salário: {$salario} " . "\n");
    }
}

