<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../../_css/estilo.css"/>
    </head>
    <body>
        <div>
        <?php
         $nome = isset($_GET["nome"])? $_GET["nome"]: ["não informado"];
         $ano = isset($_GET["ano"])?$_GET["ano"]:["não informado"];
         $idade = 2018 - $ano;
         $sexo = isset($_GET["sexo"])?$_GET["sexo"]:["não informado"];
         echo "$nome tem $idade anos, e é do sexo $sexo";
        ?>
            <br/><a href="01.php">Volatr</a>
        </div>
    </body>
</html>
