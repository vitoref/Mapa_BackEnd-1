<?php

include("dados.php");

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
            <li><a class = "c" href = "prato.php"> Home </a></li>
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

    <h3> Confira as nossas marmitas </h3>

    <h5> Aqui você encontra nosso cardápio de marmitas </h5>

    <?php

        foreach($marmitas as $key => $value) {

    ?>

    <section class = "item1">

        <img src =<?=$value['imagem'];?>>

        <h4> <a href = 'prato.php?id=<?=$value['id'];?>'><?=$value['ingredientes'];?> </a> </h4>

        <h4> Preço: <?=$value['preco'];?> reais</h4>

    </section>

    <?php

        };

    ?>

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

