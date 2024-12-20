<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Arrays no PHP</h1>
    <hr>

    <?php
    //Array numérico/indexado
    $bandas = ["Steppenwolf", "UFO", "Mc5,", "Love"];
    $cursos = array("Node.js", "Design", "Nutrição");
?>

 <h2>Acessando os dados do array</h2>
 <p>Psicodélico: <?=$bandas[3]?></p>
 <p>Ontem estivemos com a turma de <?=$cursos[2]?></p>

 <hr>

 <?php
// Array associativo
$filme = [
    "titulo" => "Senhor dos Anéis",
    "autor" => "J.R.R. Tolkien",
    "lançamento" => "2001",
    "genero" => "Fantasia"
]

?>

<h2>Acessando os dados do array associativo</h2>
<p>O filme <?=$filme["titulo"]?> foi lançado em <?=$filme["lançamento"]?></p>
<h2>Comados Úteis para análise de arrays</h2>

<h3>print_r(nomeArray)</h3>
<pre><?=print_r($bandas)?></pre>
<h3>var_dump(nomeArray)</h3>
<pre><?=var_dump($bandas)?></pre>

</div>

<?php include "redes-sociais.html"?>
</body>
</html>