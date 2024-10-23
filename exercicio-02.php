<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$salarioNormal = 2000;


if($salarioNormal < 500){
    $salarioNovo = $salarioNormal * 1.15;

}
elseif($salarioNormal <= 1000){
    $salarioNovo = $salarioNormal * 1.10;

}
else { $salarioNovo = $salarioNormal * 1.05;

}?>

<!-- Saída de dados -->
<p>Salário antigo:<?=$salarioNormal?></p>
<p>Salário reajustado: <?=$salarioNovo?> </p>


<p>Salário antigo:R$
    <?=number_format(2,',',',')?>
</p>

<p>Novo salário (reajustado)
    <?=number_format($salarioNovo, 2, ',',',')?>
</p> 
</body>
</html>