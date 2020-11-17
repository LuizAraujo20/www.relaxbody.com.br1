<!DOCTYPE html>

<html>
<head>
        <meta charset="UTF-8"/>
        <title></title>
        <link rel="stylesheet" href="../Estilos/formularios.css"/>
    <script language="javascript" src="Script/funcoes.js"></script>
</head>
<body>
    <div id="iframeLogin">
        <fieldset id="CampoFormLogin" class="RetanguloMeio">
            <legend>Fazer Login:</legend>
            <form method="post" action="../Controle/ControleFormLogin.php" name="FormLogin" id="FormLogin">
                <table>
                    <tr><td><label for="LoginEmail">Email:</label></td><td colspan="2"><input type="text" name="LoginEmail" id="LoginEmail" placeholder="Fulano de Tal"/></td></tr>
                    <tr><td><label for="LoginSenha">Senha:</label></td><td colspan="2"><input type="number" name="LoginSenha" id="LoginSenha" placeholder="12345678910"/></td></tr>

                    <tr class="trheight">
                        <td align="center"><a href="agendamentos.php?PAGINA=cliente" class="botao">Cadastrar</a></td>
                        <td><input type="submit" value="Fazer Login" class="botao"/></td>
                    </tr>	
                </table>
            </form>
        </fieldset>
    </div>
    <?php

    ?>
</body>
</html>