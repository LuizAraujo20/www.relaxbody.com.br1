<!DOCTYPE html>

<html>
<head>
        <meta charset="UTF-8"/>
        <title></title>
    <link rel="stylesheet" href="Estilos/formularios.css"/>
        <script language="javascript" src="./Controle/funcoes.js"></script>
</head>

<body>
    

    <fieldset id="CampoFormCadastro">
        <legend><h2>Cadastro de</h2></legend>
            <table>
                <tr><td><a href="./Visao/FormCliente.php" class="botaoMenu">CLIENTE</a></td>
                <td><a href="./Visao/FormFuncionario.php" class="botaoMenu">FUNCIONÁRIO</a></td></tr>
                <tr><td>&nbsp;</td>
                <td>&nbsp;</td></tr>
                
                <tr><td><a href="./Controle/DAO/logout.php" class="botaoMenu">&nbsp;&nbsp;LOGOUT&nbsp;&nbsp;</a></td>
                <td><a href="./Visao/FormLogin.php" class="botaoMenu">&nbsp;&nbsp;LOGIN&nbsp;&nbsp;</a></td></tr>
                
                
            </table>
    </fieldset>
    <?php
        require_once './Controle/DAO/Conexao.php';
        
        if(isset($_GET["PAGINA"])){
            $pagina = $_GET["PAGINA"];
            switch ($pagina) {
                case 'login':
                    require_once './Visao/FormLogin.php';
                    break;
                case 'logout':
                    require_once './Controle/DAO/logout.php';
                    break;
                case "sucessoLogin":
                    $nomeFuncionarioLogado = $_SESSION["nomeFuncionarioLogado"];
                    echo 'Seja Bem Vindo '.$nomeFuncionarioLogado;
                    break;
                case 'erroLogin':
                    echo 'email/senha INCORRETOS';
                    break;
                case 'funcionario':
                    require_once './Visao/FormFuncionario.php';
                    break;
                default:
            }
        }else{
            if(isset($_GET["MENSAGEM"])){
                echo $_GET["MENSAGEM"];
            }
        }
        
    ?>
</body>

</html>