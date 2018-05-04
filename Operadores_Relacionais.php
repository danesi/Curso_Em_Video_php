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
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    <body>
        <div>
        <?php
            /*$n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"];
            echo "Os valore escolhidos foram $n1 e $n2 <br/>";
            $r = ($tipo =="s")?$n1+$n2:$n1*$n2;
            echo "O resultado foi $r";*/
        
           /* $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $nota3 = $_GET["n3"];
            $media = ($nota1 + $nota2 + $nota3)/3;
            $parecer = ($media >= 7)?"APROVADO!":"REPROVADO!";
            echo $parecer;
            echo "<br/>Sua média foi de $media";*/
        
            $ano = $_GET["an"];
            $idade = 2018 - $ano;
            $tipo = ($idade>= 16 && $idade<=64)?"OBRIGRATORIO":"NÃO É OBRIGRATORIO";
            echo "seu voto é $tipo";
       
        ?>
        </div>
    </body>
</html>
