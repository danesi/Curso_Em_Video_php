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
            <form method="get" action="exercicio02.php">
                Nome: <input type="text" name="nome"/><br/>
                Ano de nascimento: <input type="number" name="ano"/><br/>
                <fieldset><legend>sexo</legend>
                    <input type="radio" name="sexo" id="masculino" value="Masculino"/>
                    <label for="masculino">Masculino</label><br/>
                    <input type="radio" name="sexo" id="feminino" value="Feminino">
                    <label for="feminino">Feminino</label>
                </fieldset><br/>
                <input type="submit" value="Enviar"/> 
            </form>
        </div>
    </body>
</html>
