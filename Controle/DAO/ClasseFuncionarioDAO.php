<?php

require_once 'Conexao.php';

class ClasseFuncionarioDAO{
    public function cadastrarFuncionario(ClasseFuncionario $funcionario){
        try{
            $pdo = Conexao::getInstance();
            /*$sql = "INSERT INTO funcionario(nome, cpf, email, senha,perfil,dataadimissao, cargo, salario) VALUES (?,?,?,?,?,?,?,?)";*/
            
            $sql = "INSERT INTO `funcionario`(`nome`, `cpf`, `email`, `senha`, `perfil`, `dataadmissao`, `cargo`, `salario`) VALUES (?,?,?,?,?,?,?,?)";

            $stmt= $pdo->prepare($sql);
            $stmt->bindValue(1, $funcionario->getNome());
            $stmt->bindValue(2, $funcionario->getCpf());
            $stmt->bindValue(3, $funcionario->getEmail());
            $stmt->bindValue(4, $funcionario->getSenha());
            $stmt->bindValue(5, $funcionario->getPerfil());
            $stmt->bindValue(6, $funcionario->getDataAdmissao());
            $stmt->bindValue(7, $funcionario->getCargo());
            $stmt->bindValue(8, $funcionario->getSalario());

            $resultset = $stmt->execute();

            return $resultset;

        }  catch (PDOException $exc){
            echo $exc->getMessage();
        }
    }
}
?>
