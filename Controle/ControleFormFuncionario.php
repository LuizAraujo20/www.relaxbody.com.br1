<?php
require_once '../Modelo/ClasseFuncionario.php';
require_once './DAO/ClasseFuncionarioDAO.php';

	$Nome = $_POST["FuncionarioNome"];
	$Cpf = $_POST["FuncionarioCpf"];
	$Email = $_POST["FuncionarioEmail"];
	$Senha = $_POST["FuncionarioSenha"];
	$Perfil = $_POST["FuncionarioPerfil"];
	$FuncionarioId = $_POST["FuncionarioId"];
	$DataAdmissao= $_POST["FuncionarioDataAdmissao"];
	$Cargo = $_POST["FuncionarioCargo"];
	$Salario= $_POST["FuncionarioSalario"];
	$DataNascimento= $_POST["FuncionarioDataNascimento"];
	$Descricao= $_POST["FuncionarioDescricao"];
   
	$novoFuncionario = new ClasseFuncionario();
	$novoFuncionario->setNome($Nome);
	$novoFuncionario->setCpf($Cpf);
	$novoFuncionario->setEmail($Email);
	$novoFuncionario->setSenha($Senha);
	$novoFuncionario->setPerfil($Perfil);
	$novoFuncionario->setFuncionarioId($FuncionarioId);
	$novoFuncionario->setDataAdmissao($DataAdmissao);
	$novoFuncionario->setCargo($Cargo);
	$novoFuncionario->setSalario($Salario);
	$novoFuncionario->setNascimento($DataNascimento);
	$novoFuncionario->setTelefones($Telefones);
	$novoFuncionario->setDescricao($Descricao);
	
	
	$funcionarioDAO = new ClasseFuncionarioDAO();
	$cadastrar = $funcionarioDAO->cadastrarFuncionario($novoFuncionario);
	if($cadastrar){
		header('Location: ../home.php');
                echo "alert('Cadastrado com Sucesso!')";
	}else{
		header('Location: ../home.php');
                echo "alert('Tente novamente!')";
	}
	
	
	
	/*
	echo "<tr><td><span>Nome: </span><td>$Nome</td></tr>";
	echo "<tr><td><span>Cpf: </span></td><td>$Cpf</td></tr>";
	echo "<tr><td><span>Email: </span></td><td>$Email</td></tr>";
	echo "<tr><td><span>Senha: </span></td><td>$Senha</td></tr>";
	echo "<tr><td><span>Id: </span></td><td>$Id</td></tr>";
	echo "<tr><td><span>Status: </span></td><td>$Cargo</td></tr>";
	echo "<tr><td><span>Salário: </span></td><td>$Salario</td></tr>";
	echo "<tr><td><span>Última Compra: </span></td><td>$Admissao</td></tr>";
	echo "<tr><td></td><td></br></td></tr>";
	echo "<tr><td align='left'><a href='../Visao/FormFuncionario.php' class='botao'>Novo Cadastro</a></td>";
	 */
?>