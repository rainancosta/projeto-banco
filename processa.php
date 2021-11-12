<?php
//Aqui está sendo chamada a conexão com o banco de dados
include_once("conexao.php");

//busca os dados do cliente do formulario de cadastro.
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST ['endereco'];
$senha = $_POST['senha'];
$saldo = $_POST['saldo'];

// Insere os dados do cliente dentro do banco de dados atraves de um comando insert into.
$sql = "insert into clientes (cpf, nome, telefone, endereco, senha, saldo) values ('$cpf','$nome', '$telefone', '$endereco', '$senha', '$saldo')";
$salvar = mysqli_query($conexao, $sql);

mysqli_close($conexao);

?>


<!DOCTYPE html>
<html pt-br>
<head>
	<meta charset= "UTF-8">
	<title>Tela de cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<!--Formatação da aba do formulário-->
<div class="container">
 <div class="row">
 <div class="col-6"> 
 <div class="card">

    <H1>Cadastro realizado com sucesso.</H1>
    <hr><br>

                    <div class="form-group">
			               
		              <ul class="nav justify-content-center">
						<br>
					  <li class="nav-item">
					    <a class="nav-link active" href="index.php">Página Inicial</a>
					  </li>
					</ul>
		              
		               
		           </div>
				   </div> 
</body>
<script src="js/jquery-3.3.1.slim.min"></script>
		  <script src="js/bootstrap.min.js"></script>
</html>