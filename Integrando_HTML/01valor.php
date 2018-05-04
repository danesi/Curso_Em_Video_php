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
            $valor = $_GET["v"];
            $rq = sqrt($valor);
            echo "a raiz quadrada de $valor é igual $rq";
        ?>
            <br/><a href="Aula_08.php">Voltar</a>
        </div>    
    </body>
</html>
