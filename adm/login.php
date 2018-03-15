<?php session_start(); ?>

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
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div class="container">

<?php if (!$_POST){  ?>

		<h1>Recuperar Senha</h1><br>
				<form action="" method="post">
					<input type="text" name="user" placeholder="seu usuário"><br />
					<input type="password" name="senha" placeholder="senha"><br />
					<input type="submit" value="Login">
				</form>
					
				<div class="alert">
					<a href="recuperarSenha.php">Esqueci minha senha</a>
				</div>
			</div>
        </div>


<?php } else { 
  include "../banco/conecta.php";  
    $senha = md5($_POST['senha']);
    $user = $_POST['user'];   

    $sql ="SELECT * FROM login WHERE user LIKE '$user' AND senha LIKE '$senha'"; //Consulta
    //echo $sql;
    try{
            $consulta = $db->prepare($sql);//prepara a consulta para evitar sql injection
            $consulta->execute(); //executa a consulta
        } 
        catch(PDOException $e) {
                echo $e -> getMessage(); //Se não conseguiu fazer a consulta retorna um erro
            }
    $resultado = $consulta->fetch(PDO::FETCH_OBJ);
    if($resultado){
        
        $_SESSION['nome'] = $resultado->nome;
        //echo  $_SESSION['nome'];
        header('location:./index.php');


    } else {
        unset($_SESSION['nome']);
        echo "<h1>Usuário ou senha inválidos</h1>";
        echo "<p><a href='login.php' target='_self'>Tentar novamente</a></p>";
    }
 }//final do else ?>


	</div>
</body>
</html>