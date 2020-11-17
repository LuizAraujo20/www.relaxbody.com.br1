<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8"/>
    <title>Relax Body</title>
    <script language="javascript" src="./Controle/funcoes.js"></script>
    <link rel="stylesheet" href="Estilos/normalize.css"/>
    <link rel="stylesheet" href="Estilos/formularios.css"/>
    <script language="javascript" src="Script/funcoes.js"></script>
    <link rel="stylesheet" href="Estilos/estilo.css"/>
</head>

<body>
    <div class="header">
        <div class="imagem">
        <div class="nav">
            <ul>
                <li onmouseover="mudaFoto('Imagens/home.png')" onmouseout="mudaFoto('Imagens/agendamentos.png')"><a href="home.php">Home</a></li>
                <li onmouseover="mudaFoto('Imagens/informacoes.png')" onmouseout="mudaFoto('Imagens/agendamentos.png')"><a href="informacoes.php">Informações</a></li>
                <li onmouseover="mudaFoto('Imagens/agendamentos.png')" onmouseout="mudaFoto('Imagens/agendamentos.png')"><a href="agendamentos.php?PAGINA=login">Agendamento</a></li>
                <li onmouseover="mudaFoto('Imagens/contatos.png')" onmouseout="mudaFoto('Imagens/agendamentos.png')"><a href="contatos.php">Fale Conosco</a></li>
                
            </ul>
            
        </div><!--nav -->
        <h1>Relax Body</h1>
        <h2>Trazendo paz de espírito</h2>
        <div class="icone">
            <img id="icone" src="Imagens/home.png"/>
            
        </div><!--icone -->
        </div><!--imagem -->
    </div><!--header -->
    <div class="corpo">
        <div class="articles">
            <?php
            if (isset($_GET["PAGINA"])) {
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
                    case 'cliente':
                        require_once './Visao/FormCliente.php';
                        break;

                    default:
                }
            } else {
                if (isset($_GET["MENSAGEM"])) {
                    echo $_GET["MENSAGEM"];
                }
            }
            ?>
        </div><!--articles -->

    <div class="aside">
            <br/><br/><br/>
            <a href="agendamentos.php?PAGINA=funcionario">Cadastrar Funcionário</a><br/>
            <a href="agendamentos.php?PAGINA=login">Fazer Login</a><br/>                
            <a href="agendamentos.php">Página Principal</a><br/>
            <a href="agendamentos.php?PAGINA=logout">Sair</a><br/>
        </div><!--aside -->
    
    </div><!--corpo -->
<div class="footer">
    Copyright &copy; 2016 - by Relax Body<br/>
    <a href="http://facebook.com/sonetando" target="_blank">Facebook</a> | <a href="http://twitter.com/Luizin07" target="_blank">Twitter</a>
</div><!--footer -->


<?php

?>
</body>
</html>