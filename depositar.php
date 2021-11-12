<?php
//chamada da conexao com o banco de dados.
include_once'conexao.php';

session_start();

if (isset ($_POST['btn-depositar'])):
$cpf= $_SESSION['cpf_usuario'];
$sql= "SELECT saldo FROM clientes WHERE cpf = '$cpf'";
$resultado= mysqli_query($conexao, $sql);
$dados= mysqli_fetch_array($resultado);
$saldo= $dados['saldo'];
$deposito = $_POST['deposito'];
if (mysqli_num_rows($resultado) > 0):
    $soma= ($deposito + $saldo);
    $sql = " UPDATE clientes  SET saldo = $soma WHERE cpf = '$cpf'";
    $salvar = mysqli_query($conexao, $sql);
    echo("Depósito realizado com sucesso!.");
    else:
    echo("A operação Falhou!.");	
  endif;

 endif;
?>
<!------------------------------------------------------------------------------>
<!DOCTYPE html>
  <html  lang="pt-br">
    <head>
		<meta charset="utf-8">
		<title>Tela de Depósito</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="estilo.css">
					
	</head>

	<body>
        <div class="container">
        	<div class="row">
				<div class="col-5"> 
				<div class="card"> 
                <H1>Tela de depósito </H1> 
				<hr>

				 <!--formulario para o depósito do cliente-->
			<div class="form-group">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method= "POST">
				 <H3>Digite o valor do depósito:</H3><br>
				<input class="form-control" type="double" name="deposito" class= "campo" maxlength= "40" required autofocus placeholder="Ex: R$ 1000.00 "><br>
				
				<ul class="nav justify-content-center">
						<br>
					  <li>
					    <button type="submit" name="btn-depositar" class="btn btn-success">Confirmar</button><br> 
					  </li>
					</ul>


		   	</form>
              <br><br><br><br>
              <ul class="nav justify-content-center">
						<br>
					  <li class="nav-item">
					    <a class="nav-link active" href="home.php">Voltar</a>
					  </li>
					</ul>

               
            </div class="form-group">
        </div>
        </div>
          <script src="js/jquery-3.3.1.slim.min"></script>
		  <script src="js/bootstrap.min.js"></script>
        </div>
	</body>
 </html>
