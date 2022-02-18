<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa / Conta</title>
</head>
<body>
    
<?php

include_once "./Classes/Pessoa.class.php";
include_once "./Classes/Conta.class.php";
include_once "./Classes/ContaPoupanca.class.php";

$vitor = new Pessoa;

$vitor->Codigo       = 01;
$vitor->Nome         = "Vitor Borges";
$vitor->Altura       = 1.60;
$vitor->Idade        = 23;
$vitor->Nascimento   = "23/08/1998";
$vitor->Escolaridade = "Ensino Médio Completo";

echo "Manipulando o objeto {$vitor->Nome}: <br><br>";

echo "{$vitor->Nome} é formado em: {$vitor->Escolaridade}<br>";
$vitor->Formar('Programador');
echo "{$vitor->Nome} é formado em: {$vitor->Escolaridade}<br>";

echo "{$vitor->Nome} possui {$vitor->Idade}<br>";
$vitor->Envelhecer(9);

echo "<br>";

$conta_vitor = new Conta(6678,"CC.1234.56","17/08/2008",$vitor,1234,1540.00,false);

echo "<hr>";

echo "Manipulando a conta de {$vitor->Nome}:<br><br>";
echo "O saldo atual é R/$ {$conta_vitor->ObterSaldo()}<br>";
$conta_vitor->Depositar(100);
$conta_vitor->Retirar(58);

?>

</body>
</html>