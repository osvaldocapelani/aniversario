<?php
include "conecta.php";

$id = $_POST['id'];// recebendo as variaveis vindas do formulário

if (empty($id)){//Se nada foi passado por post

	header('Location: ../index.php');//volta para a página principal

} // Final do IF


else //Se houver um dado enviado por post

{
		$sql = "DELETE FROM teste WHERE id = $id"; //Faz a exclusão
		
		try{
				$atualizar = $db->prepare($sql);//prepara a exclusão para evitar sql injection
				$atualizar->execute(); //executa a exclusão
				echo "Exclusão Realizada com Sucesso <br />";
				echo "<a href=\"../index.php \" target=\"self\" >Clique aqui para continuar!</a>";
			} 
			catch(PDOException $e) {
					echo $e -> getMessage(); //Se não conseguiu fazer a exclusão retorna um erro
				}//final do catch
}//final do else
