<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8"/>
		<title></title>
		<script language="javascript" src="./Controle/funcoes.js"></script>
		<style>
		</style>
	</head>

	<body>
		<table border="3">
			<tr>
				<td id="celula" onClick="mudar_cor_over(this)">TESTE 1</td>
				<td id="celula" onClick="mudar_cor_over(this)">TESTE 2</td>
				<td id="celula" onClick="mudar_cor_over(this)">TESTE 3</td>
			</tr>
			<tr>
				<td id="celula" onClick="mudar_cor_over(this)">TESTE 4</td>
				<td id="celula" onClick="mudar_cor_over(this)">TESTE 5</td>
				<td id="celula" onClick="mudar_cor_over(this)">TESTE 6</td>
			</tr>
			<tr>
				<td id="celula7" onClick="mudar_cor_over(this)">TESTE 7</td>
				<td id="celula8" onClick="mudar_cor_over(this)">TESTE 8</td>
				<td id="celula9" onClick="mudar_cor_over(this)">TESTE 9</td>
			</tr>		
		</table>
		<form name=fcolor>
		Numero de celula: <input type=text name=celula size=3>
			<br>
			Cor: <input type=text name=minhacor size=8>
			<br>
			<input type=button value="Mudar cor" onclick="muda_cor()">
		</form> 
		<?php
		
		?>
	</body>
</html>