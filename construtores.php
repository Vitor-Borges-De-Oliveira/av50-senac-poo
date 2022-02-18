<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construtores</title>
</head>
<body>
    
<?php

include_once "./Classes/Pessoa.class.php";
include_once "./Classes/Conta.class.php";

$vitor = new Pessoa;

$vitor->Codigo       = 01;
$vitor->Nome         = "Vitor Borges";
$vitor->Altura       = 1.60;
$vitor->Idade        = 23;
$vitor->Nascimento   = "23/08/1998";
$vitor->Escolaridade = "Ensino Médio Completo";
$vitor->Salario      = 850.00;

echo "Manipulando o objeto {$vitor->Nome}:<br><br>";

echo "{$vitor->Nome} é formado em: {$vitor->Escolaridade}<br>";
$vitor->Formar('programação');
echo "{$vitor->Nome} é formado em: {$vitor->Escolaridade}<br>";

echo "{$vitor->Nome} possui {$vitor->Idade}<br>";
$vitor->Envelhecer(9);

echo "<hr>";

$conta_vitor = new Conta(6678,"CC.1234.56","17/08/2008",$vitor,1234,1540.00,false);

echo "Manipulando a conta de {$vitor->Nome}:<br><br>";

echo "O saldo atual é R/$ {$conta_vitor->ObterSaldo()}<br>";
$conta_vitor->Depositar(100);
echo "O saldo atual é R/$ {$conta_vitor->ObterSaldo()}<br>";
$conta_vitor->Retirar(58);
echo "O saldo atual é R/$ {$conta_vitor->ObterSaldo()}<br>";

?>

</body>
</html>