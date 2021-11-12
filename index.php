<?php
include_once'conexao.php';
//validação do formulário 
session_start();
if (isset ($_POST['btn-entrar'])):
	$erros= array();
	$cpf= mysqli_escape_string($conexao, $_POST['cpf']);
	$senha= mysqli_escape_string($conexao, $_POST['senha']);

    if (empty($cpf) or empty($senha)):
	$erros[] = "<li> O campo CPF/Senha precisa ser preenchido.</li>";
    else:
	$sql = "SELECT cpf FROM clientes WHERE cpf = '$cpf' ";
	$resultado= mysqli_query($conexao, $sql);
	        if (mysqli_num_rows($resultado) > 0):

	        $sql= "SELECT * FROM clientes WHERE cpf = '$cpf' AND senha = '$senha'";
	        $resultado= mysqli_query($conexao, $sql);
			        if (mysqli_num_rows($resultado) == 1):
				    $dados= mysqli_fetch_array($resultado);
				    $_SESSION['logado'] = true;
				    $_SESSION['cpf_usuario'] = $dados['cpf'];
				    header('Location: home.php');
		            else:
		    	    $erros[] = "<li> Usuário/Senha não conferem</li>";
		            endif;

		    else:
	        $erros[]= "<li> Usuário inexistente. </li>";
            endif;
    endif;
endif;

?>
 <!--------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
	<html  lang="pt-br">
		<head>
				<meta charset="utf-8">
				<title>Página Inicial</title>
				<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
				<link rel="stylesheet" type="text/css" href="estilo.css">
		</head>
      <body>
	            
				<div class="container">
				<div class="row">
				<div class="col-5"> 
				<div class="card">
				
  
				<H2>Faça Login</H2> 
				<hr><br>

				<?php
				//bloco para tratamento de erros.
				if (!empty($erros)):
				foreach ($erros as  $erros):
				echo $erros;
				endforeach; 
				endif
				?>
				 <!--formulario para o login do cliente-->
				<div class="form-group">

					 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method= "POST">
		                <H5>CPF do Cliente<H5> 
					    <input class="form-control" type="number" name="cpf" class= "campo" maxlength= "40" required autofocus placeholder="Digite o seu CPF"><br>
						 <H5>Senha<H5> 
						<input class="form-control" type="password" name="senha" class= "campo" maxlength= "40" required autofocus placeholder="Digite sua senha"><br>
						
				<ul class="nav justify-content-center">
						<br>
					  <li>
					    <button type="submit" name="btn-entrar" class="btn btn-success">Entrar</button><br> 
					  </li>
				</ul>
						<br><br><br>			
					 </form>

					<ul class="nav justify-content-center">
						<br>
					  <li class="nav-item">
					    <a class="nav-link active" href="cadastro.php">Cadastre-se</a>
					  </li>
					</ul>
				 </div class="form-group">
				</div>
				</div>		        
		            
		       <script src="js/jquery-3.3.1.slim.min"></script>
		       <script src="js/bootstrap.min.js"></script>
        
		   </body>
</html>