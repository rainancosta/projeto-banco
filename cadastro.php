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
		         <H2>Cadastro de clientes</H1> 
		           <hr><br>
			 <!--formulario para o cadastro de cliente-->
			 <div class="form-group">
			            <form action="processa.php" method= "post">

						<H5>CPF</H5>
						<input class="form-control" type="number" name="cpf" class= "campo" maxlength= "40" required autofocus placeholder="Informe seu CPF..."><br>
						<H5>Nome</H5>
						<input class="form-control" type="text" name="nome" class= "campo" maxlength= "40" required autofocus placeholder="Informe seu Nome..."><br>
						<H5>Telefone </H5>
						<input class="form-control" type="number" name="telefone" class= "campo" maxlength= "40" required autofocus placeholder="Informe seu Telefone..."><br>
						<H5>Endereço</H5> 
						<input class="form-control" type="text" name="endereco" class= "campo" maxlength= "50" required autofocus placeholder="Informe seu Endereço..."><br>
						<H5>Senha</H5> 
						<input class="form-control" type="password" name="senha" class= "campo" maxlength= "40" required autofocus placeholder="Informe sua Senha com 6 Números."><br>
						<H5>Saldo</H5>
						<input class="form-control" type="double" name="saldo" class= "campo" maxlength= "40" required autofocus placeholder="Informe seu Saldo Inicial. Usar . ao invés de ,."><br>
						<br>
						<ul class="nav justify-content-center">
						<br>
					  <li>
					  <button type="submit" class="btn btn-success">Salvar</button>
					  <button type="reset" class="btn btn-danger">Limpar</button>  
					  </li>
				</ul>
						<br><br>
						    
		               </form><br><br>
		               <ul class="nav justify-content-center">
						<br>
					  <li class="nav-item">
					    <a class="nav-link active" href="index.php">Página Inicial</a>
					  </li>
					</ul>
		           <div class="form-group">
		           </div>
				   </div>
		  <script src="js/jquery-3.3.1.slim.min"></script>
		  <script src="js/bootstrap.min.js"></script>

		</body>
	</html>