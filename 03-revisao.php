<?php include "recursos-externos.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão HTML e PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Revisando o básico</h1>
    <hr>

<ul>
    <?php foreach($tecnologias as $tech){ ?>

    <li> <?=$tech?> </li>

    <?php   } ?>


</ul>



    <hr>
    <?php
    /* Criar duas variáveis e/ou constantes*/

    const NOME = "Chapolin Colorado";
    $idade = 25;

    /* Exibir no HTML uma frase da seguinte forma */
//Olá meu nome é Chapolin Colorado e tenho 25 anos.
/* Desafio: - O nome deve aparecer em itálico e com cor diiferente no texto 
- A idade deve aparecer apenas com cor de fundo diferente*/
?>

 <p> Olá! meu nome <i class="text-danger"><?=NOME?></i> e tenho <span class="text-warning"> <?=$idade?> </span>anos.</p>

 <p class="text-warning">estou bom da cabeça</p>


</body>
</html>