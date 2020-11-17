<?php
require_once '../Modelo/ClasseCliente.php';
require_once './DAO/ClasseClienteDAO.php';
require_once '../Modelo/ClasseUsuario.php';

    $Nome = $_POST["ClienteNome"];
    $Email = $_POST["ClienteEmail"];
    $Cpf = $_POST["ClienteCpf"];
    $Senha = $_POST["ClienteSenha"];
    $Telefones = $_POST["ClienteTelefone"];
    $Nascimento = $_POST["ClienteDataNascimento"];
    $Perfil = $_POST["ClientePerfil"];

    $NovoCliente = new ClasseCliente();
    $NovoCliente->setNome($Nome);
    $NovoCliente->setEmail($Email);
    $NovoCliente->setCpf($Cpf);
    $NovoCliente->setSenha($Senha);
    $NovoCliente->setTelefones($Telefones);
    $NovoCliente->setNascimento($Nascimento);
    $NovoCliente->setPerfil($Perfil);

    $clienteDAO = new ClasseClienteDAO();
    $cadastrar = $clienteDAO->cadastrarCliente($NovoCliente);
    if($cadastrar){
        header('Location: ../agendamentos.php?PAGINA=sucessoLogin');
        echo "alert('Cadastrado com Sucesso!')";
    }else{
            header('Location: ../agendamentos.php?PAGINA=login');
            echo "alert('Tente novamente!')";
    }



/*
    echo "<tr><td><span>Nome: </span><td>$Nome</td></tr>";
    echo "<tr><td><span>Cpf: </span></td><td>$Cpf</td></tr>";
    echo "<tr><td><span>Email: </span></td><td>$Email</td></tr>";
    echo "<tr><td><span>Senha: </span></td><td>$Senha</td></tr>";
    echo "<tr><td><span>Id: </span></td><td>$Id</td></tr>";
    echo "<tr><td><span>Status: </span></td><td>$Status</td></tr>";
    echo "<tr><td><span>Última Compra: </span></td><td>$UltimaCompra</td></tr>";                         
    echo "<tr><td></td><td></br></td></tr>";
    echo "<tr><td align='left'><a href='../Visao/FormCliente.php' class='botao'>Novo Cadastro</a></td>";                          */             
?>