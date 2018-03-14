<?php
include "conecta.php";

$id = $_POST['id'];// recebendo as variaveis vindas do formulário

if (empty($id)){//Se nada foi passado por post

	header('Location: ../index.php');//volta para a página principal

} // Final do IF


else //Se houver um dado enviado por post

{
		$sql ="SELECT * FROM teste WHERE id = $id"; //Faz a Consulta 
		try{
				$consulta = $db->prepare($sql);//prepara a consulta para evitar sql injection
				$consulta->execute(); //executa a consulta
			} 
			catch(PDOException $e) {
					echo $e -> getMessage(); //Se não conseguiu fazer a consulta retorna um erro
				}
				
								
				while ($resultado = $consulta->fetch(PDO::FETCH_OBJ)){//Enquanto houver um resultado
					//constrói as colunas
?>


	<form name="editar" action="modificarDados.php" method="post">
		<table border="1">
			<tr>
				<td>
					<input type="hidden" name="id" value="<?php echo $resultado->id; ?>" /> 
					<input type="text" name="nome" value="<?php echo $resultado->nome; ?>" />
				</td>
				<td>
					<input type="text" name="celular" value="<?php echo $resultado->celular; ?>" />
				</td>
				<td>
					<input type="submit" value="Alterar" />
				</td>
			</tr>
		</table>	
	</form>				



<?php }; //while final; 
}

?>
