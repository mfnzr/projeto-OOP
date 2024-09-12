<?php

require_once 'Animal.php';
require_once 'humano1.php';

class Gato extends Animal {
    public function falar(){
        return "MIAAAAAAAAAAAAAAAU" ."\n";
    }
}
