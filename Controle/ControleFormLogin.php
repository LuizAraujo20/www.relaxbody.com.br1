<?php
    require_once './DAO/ClasseLoginDAO.php';
    
    $Email = $_POST["LoginEmail"];
    $Senha = $_POST["LoginSenha"];
    
    $LoginDAO = new ClasseLoginDAO();
    $usuario = $LoginDAO->fazerLogin($Email, $Senha);
    
    /*foreach ($Resultado as $dado){   //trandforma em array ou traz tudo para uma variavel
        echo $dado;
    }*/
    if((isset($usuario) & ($usuario != NULL))){
        header('Location: ../agendamentos.php?PAGINA=sucessoLogin');
        //cadastradoSucesso();
    }  else {
        header('Location: ../agendamentos.php?PAGINA=erroLogin');
        //cadastradoFalho();
        
    }
?>