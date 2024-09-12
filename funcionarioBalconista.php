<?php

require_once 'Funcionarios.php';

class Balconista extends Funcionarios {
    
    public function apresentacao($nome, $salario) {
        return ("Nome: {$nome} " . "\n" . "Salário: {$salario} " . "\n");
    }
}