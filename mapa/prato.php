<?php

include("dados.php");

$id = $_GET['id'] - 1;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title><?=$title;?></title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
</head>

<header>

<nav>
    <ul id = "nav">
        <li><a class = "c" href = "mapa.php"> Home </a></li>
        <li><a class = "c" href = "mapa.php"> Blog </a></li>
        <li><a class = "c" href = "mapa.php"> Conheça a Dona Rita </a> </li>
        <li><a class = "c" href = "mapa.php"> Contato </a></li>

    </ul>
</nav>

</header>

<body>

    <img id = "comida" src = "comida2.jpg">
    <label id = "texto-comida">Venha provar as marmitas da Dona Rita! </label>
    <label> <a class = "d" href = "mapa.php"> Saiba mais! </a> </label>

    <ul class = 'item1' >
        <li class = 'item1'><img src =<?php printf($marmitas[$id]['imagem']);?>></li>
    </ul>

    <ul class = 'item1'>    
        <li><strong>Nome do Prato:</strong> <?php printf($marmitas[$id]['nome']);?></li>
        <li><strong>Ingredientes:</strong> <?php printf($marmitas[$id]['ingredientes']);?></li>
        <li><strong>Preço:</strong> <?php printf($marmitas[$id]['preco']);?> reais</li>
        <br>
        <br>
        <br>
        <br>
    </ul>
</body>

<footer>

    <h3> Quer Saber mais? </h3>

    <section>
          
        <ul class = "inlinefooter">
            <h4>Nossas Páginas</h4>
            <li><a class = "c" href = "mapa.php"> Home </a></li>
            <li><a class = "c" href = "mapa.php"> Blog </a></li>
            <li><a class = "c" href = "mapa.php"> Conheça a Dona Rita </a> </li>
            <li><a class = "c" href = "mapa.php"> Contato </a></li>
        </ul>
    
  
        <ul class = "inlinefooter">
            <h4>  Links Úteis  </h4>
            <li><a class = "c" href = "mapa.php"> Politica de Privacidade </a></li>
            <li><a class = "c" href = "mapa.php"> Aviso Legal </a></li>
            <li><a class = "c" href = "mapa.php"> Termos de Uso </a></li>
            <br>
        </ul>
    
    
        <ul class = "inlinefooter">
            <h4>Sobre o projeto</h4>
            <li><a class = "c" href = "mapa.php"> Projeto de divulgação de marmitas </a></li>
            <br>
            <br>
            <br>
        </ul>
        <br>

    </section>

    <p id = "foot"> Desenvolvido por Vitor Eugênio Finco </p>
</footer>

</html>

