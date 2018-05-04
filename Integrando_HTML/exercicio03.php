<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php
            $txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
            $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
            $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
        ?>
        <link rel="stylesheet" href="../../_css/estilo.css"/>
        <title></title>
        <style>
            span.texto {
                font-size: <?php echo $tam;?>;
                color: <?php echo $cor;?>;
            }
        </style>
    </head>
        
    <body>
        <div>
        <?php
            echo "<span class='texto'>$txt</span>";
        ?>
            <br/><a href="03.php">Volatr</a>
        </div>
    </body>
</html>
