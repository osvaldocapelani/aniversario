<?php
include "conecta.php";

$id = $_POST['id'];// recebendo as variaveis vindas do formulário
$nome = $_POST['nome'];
$celular = $_POST['celular'];

if (empty($id)){//Se nada foi passado por post

	header('Location: ../index.php');//volta para a página principal

} // Final do IF


else //Se houver um dado enviado por post

{
		$sql ="UPDATE teste SET nome='$nome', celular='$celular' WHERE id = $id"; //Faz a Atualização
		
		try{
				$atualizar = $db->prepare($sql);//prepara a atualização para evitar sql injection
				$atualizar->execute(); //executa a atualização
				echo "Atualização Realizada com Sucesso <br />";
				echo "<a href=\"../index.php \" target=\"self\" >Clique aqui para continuar!</a>";
			} 
			catch(PDOException $e) {
					echo $e -> getMessage(); //Se não conseguiu fazer a atualização retorna um erro
				}//final do catch
}//final do else
