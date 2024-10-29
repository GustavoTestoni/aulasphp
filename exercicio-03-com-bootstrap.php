<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 03</title>

<style>
    list-group-item:nth-child(odd){ /*ímpar*/
        color: blue;
    }
    list-group-item:nth-child(even){ /*par */
        color: red
    }
</style>
</head>

<body>

<h2>Loop, Array e HTML</h2>
<ol class="list-group list-group-numbered">
<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro","Novembro", "Dezembro"];
for($i = 0; $i < count($meses); $i++){
?>


    <li class="list-group-item"><?=$meses[$i]?></li>

    
<?php 

}
?>
</ol>  
</body>
</html>