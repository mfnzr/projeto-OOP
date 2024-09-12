<?php

require_once 'Animal.php';

class Gato extends Animal {
    public function falar(){
        return "MIAAAAAAAAAAAAAAAU";
    }
}

$animal1 = new Gato(readline("Nome do animal:"), readline( "raca do animal:"), readline("Quantidade de patas do animal:"), readline("cor do animal:"), readline("peso do animal:"), readline("tamanho do animal:"));
$animal1->falar();