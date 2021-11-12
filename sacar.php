<?php
//chamada da conexao com o banco de dados.
include_once'conexao.php';

session_start();
$erros= array();
if (isset ($_POST['btn-sacar'])):
$cpf= $_SESSION['cpf_usuario'];
$sql= "SELECT saldo FROM clientes WHERE cpf = '$cpf'";
$resultado= mysqli_query($conexao, $sql);
$dados= mysqli_fetch_array($resultado);
$saldo= $dados['saldo'];
$saque = $_POST['saque'];
if (mysqli_num_rows($resultado) > 0):
    if ($saldo < $saque ):
	$erros[]= "<li>A operação falhou. Saldo Insuficiente.</li>";
    else:
    $novosaldo= ($saldo - $saque);
    $sql = " UPDATE clientes  SET saldo = $novosaldo WHERE cpf = '$cpf'";
    $salvar = mysqli_query($conexao, $sql);
    echo("Saque Realizado com sucesso!.");

   endif;
  endif;

 endif;
?>
<!------------------------------------------------------------------------------>
<!DOCTYPE html>
<html  lang="pt-br">
	<head>
	    <meta charset="utf-8">
		<title>Tela de Saque</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="estilo.css">
						
	</head>
       <body>
            <div class="container">
		       <div class="row">
				<div class="col-5"> 
				<div class="card"> 
				<H1>Tela de depósito </H1> 
				<hr><br>
                 
                 <?php
					 //bloco para o tratamento de erros
					if (!empty($erros)):
						foreach ($erros as  $erros):
						echo $erros;
						endforeach; 
					endif
				 ?>

				 <!--formulario para saque do cliente-->
			    <div class="form-group">
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method= "POST">
						 <H2>Digite o Valor do Saque:</H2><br>
						<input class="form-control" type="double" name="saque" class= "campo" maxlength= "40" required autofocus placeholder="Ex: R$ 500.00 "><br>
						<ul class="nav justify-content-center">
						<br>
					  <li>
					    <button type="submit" name="btn-sacar" class="btn btn-success">Confirmar</button><br> 
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
		              
		               
		           </div>  
				</div class="form-group">			
            </div>
            </div>

        <script src="js/jquery-3.3.1.slim.min"></script>
		<script src="js/bootstrap.min.js"></script>
		</div>
	</body>
</html>
