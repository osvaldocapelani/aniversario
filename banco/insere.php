<?php
include "conecta.php";

$nome = $_POST['nome'];// recebendo as variaveis vindas do formulário
$celular = $_POST['celular'];

//echo $nome. " " .$celular;//apenas teste


//criando a sql de inserção no banco
try{
	$stmt = $db->prepare('INSERT INTO teste (nome, celular) VALUES (:nome, :celular)');
	$nome = $nome;
	$celular = $celular;
	 
	//amarrando as variaveis aos campos do banco
	$stmt->bindValue(':nome', $nome);
	$stmt->bindValue(':celular', $celular);
	$stmt->execute();
	header('Location: ../index.php');//volta para a página principal
	exit;
} catch(Exception $e){
	echo "Não foi possível realizar a inserção. Erro: " . $e->getMessage();
}
