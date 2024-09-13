<?php

//RECUPERAÇÃO DE ARQUIVOS
require_once 'Animal.php';
require_once 'Humano.php';

require_once 'gato.php';
require_once 'humano1.php';

require_once 'cachorro.php';
require_once 'humano2.php';

require_once 'hammster.php';
require_once 'humano3.php';

require_once 'Funcionarios.php';
require_once 'funcionarioBalconista.php';
require_once 'funcionarioVendedor.php';
require_once 'funcionarioVeterinario.php';

require_once 'Venda.php';
require_once 'Produto.php';

//VARIÁVEIS PARA CAPTAÇÃO DE DADOS ANIMAL 1
echo "----------Nome do Animal 1----------";
echo "\n";
$nomeAnimal1 = readline("Nome do animal: \n");
$racaAnimal1 = readline("Raça do animal: \n");
$quantPatas1 = readline("Quantidade de patas: \n");
$corAnimal1 = readline("cor do animal: \n");
$pesoAnimal1 = readline("peso do animal:"."\n");
$tamanhoAnimal1 = readline("tamanho do animal: \n");
echo "\n";

echo "----------Nome do Tutor 1----------";
echo "\n";
$nomeTutor1 = readline("Nome Completo: \n");
$idadeTutor1 = readline( "Idade: \n");
$endereçoTutor1 = readline("Endereço: \n");
$contatoTutor1 = readline("Contato: \n");

//CHAMADA DE OBJETO DO ANIMAL E HUMANO 1
$humano1 = new TutorGato($nomeTutor1, $idadeTutor1, $endereçoTutor1, $contatoTutor1);
$animal1 = new Gato($nomeAnimal1, $racaAnimal1, $quantPatas1, $corAnimal1,$pesoAnimal1, $tamanhoAnimal1, $humano1);
echo $animal1->falar();
echo $animal1->humano->nome . "\n";


//VARIÁVEIS PARA CAPTAÇÃO DE DADOS ANIMAL 2

echo "----------Nome do Animal 2----------";
echo "\n";
$nomeAnimal2 = readline("Nome do animal: \n");
$racaAnimal2 = readline("Raça do animal: \n");
$quantPatas2 = readline("Quantidade de patas: \n");
$corAnimal2 = readline("cor do animal: \n");
$pesoAnimal2 = readline("peso do animal:"."\n");
$tamanhoAnimal2 = readline("tamanho do animal: \n");

echo "\n";

echo "----------Nome do Tutor 2----------";
echo "\n";
$nomeTutor2 = readline("Nome Completo: \n");
$idadeTutor2 = readline( "Idade: \n");
$endereçoTutor2 = readline("Endereço: \n");
$contatoTutor2 = readline("Contato: \n");
echo "\n";

//CHAMADA DE OBJETO DO ANIMAL E HUMANO 2
$humano2 = new TutorCachorro($nomeTutor2, $idadeTutor2, $endereçoTutor2, $contatoTutor2);
$animal2 = new Cachorro($nomeAnimal2, $racaAnimal2, $quantPatas2, $corAnimal2,$pesoAnimal2, $tamanhoAnimal2, $humano2);
echo $animal2->falar();
echo $animal2->humano->nome . "\n";



//VARIÁVEIS PARA CAPTAÇÃO DE DADOS ANIMAL 3
echo "\n";

echo "----------Nome do Animal 3----------";
echo "\n";
$nomeAnimal3 = readline("Nome do animal: \n");
$racaAnimal3 = readline("Raça do animal: \n");
$quantPatas3 = readline("Quantidade de patas: \n");
$corAnimal3 = readline("cor do animal: \n");
$pesoAnimal3 = readline("peso do animal:"."\n");
$tamanhoAnimal3 = readline("tamanho do animal: \n");

echo "\n";

echo "----------Nome do Tutor 3----------";
echo "\n";
$nomeTutor3 = readline("Nome Completo: \n");
$idadeTutor3 = readline( "Idade: \n");
$endereçoTutor3 = readline("Endereço: \n");
$contatoTutor3 = readline("Contato: \n");

echo "----------Nome do Animal----------";
echo "\n";
//CHAMADA DE OBJETO DO ANIMAL E HUMANO 3
$humano3 = new TutorHammster($nomeTutor3, $idadeTutor3, $endereçoTutor3, $contatoTutor3);
$animal3 = new Hammster($nomeAnimal3, $racaAnimal3, $quantPatas3, $corAnimal3,$pesoAnimal3, $tamanhoAnimal3, $humano3);
echo $animal3->falar();
echo $animal3->humano->nome . "\n";
echo "\n";


//FUNCIONÁRIOS CADASTRADOS E SALÁRIOS
$nome = "";
$salario = 0;

$balconista = new Balconista($nome, $salario);
echo $balconista->apresentacao("Jeremias", 1931.07);
echo "\n";

$vendedor = new Vendedor($nome, $salario);
echo $vendedor->apresentacao("Claudete", 2037.65);
echo "\n";

$veterinario = new Veterinario($nome, $salario);
echo $veterinario->apresentacao("Osvaldo", 4560.23);
echo "\n";


//VENDA DE PRODUTOS PARA CADA CLIENTE
$nome = "";
$preco = 0;
$quantidade = 0;

$venda1 = new Vendas($nome, $preco, $quantidade, $humano1);
echo $produtos->vendaProdutos("Areia", 20.00, 1,$humano1);
echo "\n";

$venda2 = new Vendas($nome, $preco, $quantidade, $humano2);
echo $produtos->vendaProdutos("Coleira", 32.00, 1,$humano2);
echo "\n";

$venda3 = new Vendas($nome, $preco, $quantidade, $humano3);
echo $produtos->vendaProdutos("Ração", 15.00, 1,$humano3);
echo "\n";