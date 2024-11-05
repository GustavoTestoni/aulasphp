<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (Dados)</title>

    <link rel="stylesheet" href="formstilo.css">
</head>
<body>
<h1>Exercício 04 (dados/processamento)</h1>
<hr>


<?php
$produto = $_POST["produto"];
$fabricante = $_POST["fabricante"]; 
$preco = $_POST["preco"];  
$descricao = $_POST["descricao"];
?>

<p>Produto: <?=$produto?></p>
<p>Fabricante: <?=$fabricante?></p>
<p>Preço: R$<?=number_format($preco, 2, ',','.')?></p>
<p>Descrição: <?=$descricao?></p>





<!-- Faça a partir daqui a programação
necessária para obter os dados vindos do formulário
e mostrá-los usando elementos HTML (da forma que você quiser). -->


</body>
</html>