<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$dados = [ "Chapolin", 345, "28", "Acapulco",$telefone =["11-2135-0300", "11-91234-5678" ] ];


?>



<ol>

<li>Nome do Usuário: <?=$dados[0]?></li>
<li>Idade: <?=$dados[2]?></li>
<li>Cidade: <?=$dados[3]?></li>
<li>Telefone: <?=$telefone[1]?></li>


</ol>
</body>
</html>