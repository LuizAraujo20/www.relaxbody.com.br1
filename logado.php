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
        <script>
            function logadoSucesso(){
                window.alert("LOGADO COM SUCESSO!");
            }
            function logadoFalho(){
                window.alert("LOGADO SEM SUCESSO!");
            }
            function deslogado()[
                alert("DESLOGADO SEM SUCESSO!");
                window.alert("LOGADO SEM SUCESSO!");
                header('Location: ../../index.php');
                
            ]
        </script>
    </head>
    <body>
        <button onclick="deslogado()" class="botao">Deslogar</button>
        <?php
        ?>
    </body>
</html>
