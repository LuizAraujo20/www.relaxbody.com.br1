<?php

if(isset($_SESSION['logado'])){
    // se você possui algum cookie relacionado com o login deve ser removido
    session_destroy();
    header("location: index.php");
    echo "DESLOGADO";
    exit();
    
}