<?php

require_once 'Animal.php';
require_once 'Humano.php';

require_once 'gato.php';
require_once 'humano1.php';

require_once 'cachorro.php';
require_once 'humano2.php';

require_once 'hammster.php';
require_once 'humano3.php';

$nomeAnimal1 = readline("Nome do animal: \n");
$racaAnimal1 = readline("Raça do animal: \n");
$quantPatas1 = readline("Quantidade de patas: \n");
$corAnimal1 = readline("cor do animal: \n");
$pesoAnimal1 = readline("peso do animal:"."\n");
$tamanhoAnimal1 = readline("tamanho do animal: \n");

$nomeTutor1 = readline("Nome Completo: \n");
$idadeTutor1 = readline( "Idade: \n");
$endereçoTutor1 = readline("Endereço: \n");
$contatoTutor1 = readline("Contato: \n");

$humano1 = new TutorGato($nomeTutor1, $idadeTutor1, $endereçoTutor1, $contatoTutor1);
$animal1 = new Gato($nomeAnimal1, $racaAnimal1, $quantPatas1, $corAnimal1,$pesoAnimal1, $tamanhoAnimal1, $humano1);
echo $animal1->falar();
echo $animal1->humano->nome . "\n";



$nomeAnimal2 = readline("Nome do animal: \n");
$racaAnimal2 = readline("Raça do animal: \n");
$quantPatas2 = readline("Quantidade de patas: \n");
$corAnimal2 = readline("cor do animal: \n");
$pesoAnimal2 = readline("peso do animal:"."\n");
$tamanhoAnimal2 = readline("tamanho do animal: \n");

$nomeTutor2 = readline("Nome Completo: \n");
$idadeTutor2 = readline( "Idade: \n");
$endereçoTutor2 = readline("Endereço: \n");
$contatoTutor2 = readline("Contato: \n");

$humano2 = new TutorCachorro($nomeTutor2, $idadeTutor2, $endereçoTutor2, $contatoTutor2);
$animal2 = new Cachorro($nomeAnimal2, $racaAnimal2, $quantPatas2, $corAnimal2,$pesoAnimal2, $tamanhoAnimal2, $humano2);
echo $animal2->falar();
echo $animal2->humano->nome . "\n";




$nomeAnimal3 = readline("Nome do animal: \n");
$racaAnimal3 = readline("Raça do animal: \n");
$quantPatas3 = readline("Quantidade de patas: \n");
$corAnimal3 = readline("cor do animal: \n");
$pesoAnimal3 = readline("peso do animal:"."\n");
$tamanhoAnimal3 = readline("tamanho do animal: \n");

$nomeTutor3 = readline("Nome Completo: \n");
$idadeTutor3 = readline( "Idade: \n");
$endereçoTutor3 = readline("Endereço: \n");
$contatoTutor3 = readline("Contato: \n");

$humano3 = new TutorHammster($nomeTutor3, $idadeTutor3, $endereçoTutor3, $contatoTutor3);
$animal3 = new Hammster($nomeAnimal3, $racaAnimal3, $quantPatas3, $corAnimal3,$pesoAnimal3, $tamanhoAnimal3, $humano3);
echo $animal3->falar();
echo $animal3->humano->nome . "\n";


