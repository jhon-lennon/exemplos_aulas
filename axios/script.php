<?php

$dados = [
    'nome' => 'jhon',
    'idade' => 28,
    'casado' => false,
    'altura' => 1.70,
    'estudando' => ['php', 'javascript']
];


$dados = json_encode($dados);
 
$res = $_POST['firstName'];

echo $res;


//echo $dados;