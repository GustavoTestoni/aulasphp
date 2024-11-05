<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 03</title>

<style>
    li:nth-child(odd){ /*ímpar*/
        color: blue;
    }
    li:nth-child(even){ /*par */
        color: red
    }
</style>
</head>

<body>

<h2>Loop, Array e HTML</h2>
<ol>
<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro","Novembro", "Dezembro"];
for($i = 0; $i < count($meses); $i++){
?>


    <li><?=$meses[$i]?></li>

    
<?php 
echo "<li>$meses[$i]</li>";
}
?>
</ol>  
</body>
</html>