<?php
include "../banco/conecta.php";

$id = $_POST['id'];// recebendo as variaveis vindas do formulário
$mesa = $_POST['mesa'];
$situacao = $_POST['situacao'];
$reservadoPor = $_POST['reservadoPor'];

if (empty($id)){//Se nada foi passado por post

	header('Location: ../index.php');//volta para a página principal

} // Final do IF


else //Se houver um dado enviado por post

{

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/icoBarra.svg">

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
<?php
		$sql ="UPDATE mesas SET mesa='$mesa', situacao='$situacao', reservadoPor='$reservadoPor' WHERE id = $id"; //Faz a Atualização
		
		try{
				$atualizar = $db->prepare($sql);//prepara a atualização para evitar sql injection
				$atualizar->execute(); //executa a atualização
				echo "<p>Atualização Realizada com Sucesso para mesa $mesa, em nome de <strong>$reservadoPor</strong>.</p>";
				header('location:index.php');
			} 
			catch(PDOException $e) {
					echo $e -> getMessage(); //Se não conseguiu fazer a atualização retorna um erro
				}//final do catch
}//final do else

?>
</div>
</body>
</html>