<?php

require_once 'Funcionarios.php';

class Balconista extends Funcionarios {
    
    public function apresentacao($nome, $salario) {

    }
}


echo $balconista->apresentacao("Jeremias", 1931.07);