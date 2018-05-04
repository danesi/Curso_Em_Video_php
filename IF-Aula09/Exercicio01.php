<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../_css/estilo.css"/>
        <title></title>
    </head>
    <body>
        <div>
            <?php
                $a = date("Y")- $_GET["ano"];
                if ($a >= 18){
                    echo "Permitido dirigir e votar";
                }  else {
                    echo "Não é permitido dirigir e nem votar";
                    }
            ?>
        </div>
    </body>
</html>
