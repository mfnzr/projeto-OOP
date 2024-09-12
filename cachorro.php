<?php

require_once 'Animal.php';
require_once 'humano2.php';


class Cachorro extends Animal {
    public function falar(){
        return "AU AU AU AU AU AU" ."\n";
    }
}

