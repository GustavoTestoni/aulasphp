<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 (corrigido)</title>
</head>
<body>
    
<?php

$dados = [ 
    "Chapolin", 
    "345", 
    28, 
    "Acapulco",
    ["11-2135-0300", "11-91234-5678" ]
 ];

$dados2 = [
    "usuario" => "chapolin",
    "senha" => "345",
    "idade" => 28,
    "cidade" => "acapulco",
    "telefones" => ["11-2135-0300", "11-91234-5678"]
]
?>


<h2> Versão de saída usando 
    array numérico/Indexado</h2>

<ol>

<li>Nome do Usuário: <?=$dados[0]?></li>
<li>Idade: <?=$dados[2]?></li>
<li>Cidade: <?=$dados[3]?></li>
<li>Telefone: <?=$dados[4][1]?></li>

</ol>

<h2>Versão de saída usando
    array Associativo</h2>

    <ol>

<li>Nome: <?=$dados2["usuario"]?></li>
<li>Idade: <?=$dados2["idade"]?></li>
<li>Cidade: <?=$dados2["cidade"]?></li>
<li>Celular: <?=$dados2["telefones"][1]?></li>

</ol>









</body>
</html>