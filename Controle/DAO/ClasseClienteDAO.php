<?php

require_once 'Conexao.php';

class ClasseClienteDAO{
    public function cadastrarCliente(ClasseCliente $cliente){
        try{
            $pdo = Conexao::getInstance();
            /*$sql = "INSERT INTO funcionario(nome, cpf, email, senha,perfil,dataadimissao, cargo, salario) VALUES (?,?,?,?,?,?,?,?)";*/
            
            $sql = "INSERT INTO `cliente`(`nome`, `email`, `cpf`, `senha`, `telefone`, `nascimento`, `perfil`) VALUES (?,?,?,?,?,?,?)";

            $stmt= $pdo->prepare($sql);
            $stmt->bindValue(1, $cliente->getNome());
            $stmt->bindValue(2, $cliente->getEmail());
            $stmt->bindValue(3, $cliente->getCpf());
            $stmt->bindValue(4, $cliente->getSenha());
            $stmt->bindValue(5, $cliente->getTelefones());
            $stmt->bindValue(6, $cliente->getNascimento());
            $stmt->bindValue(7, $cliente->getPerfil());

            $resultset = $stmt->execute();

            return $resultset;

        }  catch (PDOException $exc){
            echo $exc->getMessage();
        }
    }
}
?>
