<?php
include "conecta.php";


//criando a sql de inserção no banco

	$sql ="SELECT * FROM teste"; //Consulta 
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
					
					<tr>
						<td><?php echo $resultado->id; ?></td>
						<td><?php echo $resultado->nome; ?></td>
						<td><?php echo $resultado->celular; ?></td>
						<td>
							<form method="post" name="editar" action="banco/editar.php">
								<input type="hidden" name="id" value="<?php echo $resultado->id; ?>" />
								<input type="submit" value="Editar" />
							</form>
						</td>
						<td>
							<form method="post" name="excluir" action="banco/excluir.php">
								<input type="hidden" name="id" value="<?php echo $resultado->id; ?>" />
								<input type="submit" value="Excluir" />
							</form>
						</td>
					</tr>
					

			<?php }; //while final; ?>
					
