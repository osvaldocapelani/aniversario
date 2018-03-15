<?php 
session_start();
if (!isset($_SESSION['nome'])) {
    unset($_SESSION['nome']);
    header('location:login.php');
} 
 

include "../banco/conecta.php"; ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/brand.svg">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
      <div class="container">

    <h2>Bem-vindo, <?php echo $_SESSION['nome'] ;?></h2>
    <p class="pull-right"><a class="btn btn-danger" href="logout.php">SAIR</a></p>
<table class="table table-striped">
		<th>Mesa</th>
		<th>Situação</th>
		<th>Reservado por</th>
        <th colspan="2">Ações</th>
        
<?php
	$sql ="SELECT * FROM mesas"; //Consulta
		try{
				$consulta = $db->prepare($sql);//prepara a consulta para evitar sql injection
				$consulta->execute(); //executa a consulta
			} 
			catch(PDOException $e) {
					echo $e -> getMessage(); //Se não conseguiu fazer a consulta retorna um erro
				}
				
								
				while ($resultado = $consulta->fetch(PDO::FETCH_OBJ)){//Enquanto houver um resultado
                    //constrói as colunas
                    
                    $situacao = $resultado->situacao;
                    if ($situacao == "mesagreen") $situacao = "Livre";
                    if ($situacao == "mesaorange") $situacao = "Aguardando";
                    if ($situacao == "mesared") $situacao = "Reservado";
			 ?>
					
					<tr>
						<td><?php echo $resultado->mesa; ?></td>
                        <td><?php echo $situacao ?></td>
                        <td><?php echo $resultado->reservadoPor; ?></td>
						<td>
							<form method="post" name="editar" action="editar.php">
								<input type="hidden" name="id" value="<?php echo $resultado->id; ?>" />
								<input type="submit" value="Editar" />
							</form>
						</td>
					</tr>
					

            <?php }; //while final; ?>
            
</table>

</div>

</body>

</html>