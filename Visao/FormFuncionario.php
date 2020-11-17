<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Cadastro de Funcionários</title>
    <link rel="stylesheet" href="Estilos/formularios.css"/>
	</head>

	<body>
                    <fieldset id="CampoFormFuncionario" class="RetanguloMeio">
                        <legend><h2>Cadastrar Funcionário:</h2></legend>
<form method="post" action="../Controle/ControleFormFuncionario.php" name="FormFuncionario" id="FormFuncionario">
<table>
	<tr><td><label for="FuncionarioNome">Nome:</label></td><td colspan="2"><input type="text" name="FuncionarioNome" id="FuncionarioNome" placeholder="Fulano de Tal"/></td></tr>
	
	<tr><td><label for="FuncionarioCpf">CPF:</label></td><td colspan="2"><input type="number" name="FuncionarioCpf" id="FuncionarioCpf" placeholder="12345678910"/></td></tr>
	
	<tr><td><label for="FuncionarioEmail">Email:</label></td><td colspan="2"><input type="email" name="FuncionarioEmail" id="FuncionarioEmail" placeholder="asdfg@jkl.com"/></td></tr>
	
	<tr><td><label for="FuncionarioSenha">Senha:</label></td><td colspan="2"><input type="password" name="FuncionarioSenha" id="FuncionarioSenha" placeholder="123456"/></td></tr>
	
	<tr><td><label for="FuncionarioId">Id:</label></td><td colspan="2"><input type="number" name="FuncionarioId" id="FuncionarioId" placeholder="12345"/></td></tr>
	
	<tr><td><label for="FuncionarioCargo">Cargo:</label></td><td colspan="2"><input type="text" name="FuncionarioCargo" id="FuncionarioCargo" placeholder=""/></td></tr>
	
	<tr><td><label for="FuncionarioSalario">Salário:</label></td><td colspan="2"><input type="number" name="FuncionarioSalario" id="FuncionarioSalario" placeholder=""/></td></tr>
		
	<tr><td><label for="FuncionarioDataAdmissao">Admissão:</label></td><td colspan="2"><input type="date" name="FuncionarioDataAdmissao" id="FuncionarioDataAdmissao" placeholder="ATIVO"/></td></tr>

        <tr><td></td><td colspan="2"><input type="hidden" name="FuncionarioPerfil" id="FuncionarioPerfil" value="3" maxlength="1" minlength="1"/></td></tr>
        
	<tr class="trheight"><td align="center"><a href="../index.php" class="botao">Voltar</a></td>
	<td><input type="reset" value="Limpar" class="botao"/></td>
	<td><input type="submit" value="Cadastrar" class="botao"/></td></tr>	
</table>
</form>
		<?php
			
		?>
	</body>

</html>