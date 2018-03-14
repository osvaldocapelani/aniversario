<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8" />
	<title>Teste CRUD</title>
</head>
<body>
	
	<!-- Inserir dados no banco -->
	
	<form name="insere" method="post" action="banco/insere.php">
		<h2>Cadastro</h2>
		Nome: <input name="nome" type="text"/> 
		Celular: <input name="celular" type="text"/> 
		<input type="submit" value="cadastrar"/>
	</form>
	
	
	<hr />
	<hr />
	
	<!-- Mostrar o conteudo do banco -->
	
	<table border="1">
		<th>id</th>
		<th>Nome</th>
		<th>Celular</th>
		<th colspan="2">Ações</th>
		<?php
			include "banco/consulta.php";//Apresenta o resultado da consulta
		?>
			
	</table>
</body>
</html>
