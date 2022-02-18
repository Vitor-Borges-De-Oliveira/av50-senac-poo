<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 50</title>
</head>
<body>
    
<?php

include_once "./Classes/Produto.class.php";


$produto1 = new Produto;
$produto2 = new Produto;


$produto1->Codigo     = 0001;
$produto1->Descricao  = 'CD - The Man Who Sold the World';
$produto1->Preco      = "R$150,00";
$produto1->Quantidade = 405;


$produto2->Codigo     = 0002;
$produto2->Descricao  = 'CD - The Final Countdown';
$produto2->Preco      = "R$170,00";
$produto2->Quantidade = 389;


$produto1->ImprimeEtiqueta();
echo "<hr>";
$produto2->ImprimeEtiqueta();

?>

</body>
</html>