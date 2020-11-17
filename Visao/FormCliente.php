<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Cadastro de Funcionários</title>
                <link rel="stylesheet" href="../Estilos/normalize.css"/>
                <link rel="stylesheet" href="../Estilos/formularios.css"/>
	</head>

	<body>
                    <fieldset id="CampoFormCliente" class="RetanguloMeio">
                            <legend><h2>Cadastrar Cliente:</h2></legend>
                            <form method="post" action="../Controle/ControleFormCliente.php" name="FormCliente" id="FormCliente">
                                <table>
                                    <tr>
                                        <td><label for="ClienteNome">Nome:</label></td>
                                        <td colspan="2"><input type="text" name="ClienteNome" id="ClienteNome" placeholder="Fulano de Tal"/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="ClienteCpf">CPF:</label></td>
                                        <td colspan="2"><input type="number" name="ClienteCpf" id="ClienteCpf" placeholder="12345678910"/></td>
                                    </tr>
                                    <tr><td><label for="ClienteEmail">Email:</label></td><td colspan="2"><input type="email" name="ClienteEmail" id="ClienteEmail" placeholder="asdfg@jkl.com"/></td></tr>
                                    <tr>
                                        <td><label for="ClienteSenha">Senha:</label></td>
                                        <td colspan="2"><input type="password" name="ClienteSenha" id="ClienteSenha" placeholder="123456"/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="ClienteTelefone">Telefone:</label></td>
                                        <td colspan="2"><input type="number" name="ClienteTelefone" id="ClienteTelefone" placeholder="89897878"/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="ClienteDataNascimento">Data de Nascimento:</label></td>
                                        <td colspan="2"><input type="date" name="ClienteDataNascimento" id="ClienteDataNascimento"/></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="2"><input type="hidden" name="ClientePerfil" id="ClientePerfil" value="3"/></td>
                                    </tr>
                                    <tr class="trheight">
                                        <td align="center"><a href="../index.php" class="botao">Voltar</a></td>
                                        <td><input type="reset" value="Limpar" class="botao"/></td>
                                        <td><input type="submit" value="Cadastrar" class="botao"/></td>
                                    </tr>
                                    <tr>
                                        <!--<td><label for="ClienteId">Id:</label></td>-->
                                        <td colspan="2"><input type="hidden" name="ClienteId" id="ClienteId" placeholder="12345"/></td>
                                    </tr>
                                </table>
                            </form>
                        </fieldset>
		<?php
			
		?>
	</body>
</html>