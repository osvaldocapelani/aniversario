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

<?php if (!$_POST){  ?>

		<h1>Cadastro</h1><br>
				<form action="" method="post">
                    <input type="text" name="nome" placeholder="Nome Completo"><br />
					<input type="text" name="user" placeholder="nome usuário"><br />
                    <input type="password" name="senha" placeholder="senha"><br />
                    <input type="password" name="senha1" placeholder="repita senha"><br />
					<input type="submit"  value="Cadastrar">
				</form>
			</div>
        </div>

        
<?php } else { 

$senha = md5($_POST['senha']);
$senha1 = md5($_POST['senha1']);
$nome = $_POST['nome'];
$user = $_POST['user'];
 

if($senha != $senha1){
    echo "<h1>Senhas não conferem.</h1><a href='cadastrarAdm.php' target='_self'>Tentar novamente</a>";
}
else
{
    include "../banco/conecta.php";

        //criando a sql de inserção no banco
        try{
            $stmt = $db->prepare('INSERT INTO login (nome, user, senha) VALUES (:nome, :user, :senha)');
            $nome = $nome;
            $user = $user;
            $senha= $senha;
            
            //amarrando as variaveis aos campos do banco
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':user', $user);
            $stmt->bindValue(':senha', $senha);
            $stmt->execute();
            echo "<p>Cadastro realizado com sucesso para <strong>$nome</strong>.</p>";
            echo "</p><a href='./login.php' target='self' >Clique aqui para continuar!</a></p>";
            exit;
        } catch(Exception $e){
            echo "Não foi possível realizar a inserção. Erro: " . $e->getMessage();
        }
}
?>
    
    
<?php }//final do else ?>


	</div>
</body>
</html>