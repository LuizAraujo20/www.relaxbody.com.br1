<?php
session_start();
require_once './Conexao.php'; //todo classe DAO tem que ter conexao.php(conexao com BD)

class ClasseLoginDAO{
    public function fazerLogin($Email,$Senha){ //faz login
        try{//tente o seguinte
            $pdo = Conexao::GetInstance();//pega a conexao
            //a sequir conversa com o BD, em linguagem SQL
            $sql = "SELECT email,senha FROM clientes c
                    WHERE c.email = ? AND c.senha = ?";
            $stmt = $pdo->PREPARE ($sql); //recebe o $PDO e prepara a $SQL
            $stmt->bindValue(1, $Email);
            $stmt->bindValue(2, $Senha);
            $stmt-> Execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            $_SESSION["FuncionarioLogado"] = 1;
            $_SESSION["nomeFuncionarioLogado"] = $usuario['nome'];
            return $usuario;
        }// fecha try {
        catch (Exception $exc){
            echo $exc ->getMessage();
        }//fecha catch
    }//fecha function

}// classe

?>
