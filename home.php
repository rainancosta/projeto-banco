<?php
//conexão com o bd
include_once 'conexao.php';
//inicia a sessão
session_start();

//verificação de sessão
if (!isset ($_SESSION['logado'])):
	header('Location: index.php');
endif;

//dados 
$cpf= $_SESSION['cpf_usuario'];
$sql= "SELECT * FROM clientes WHERE cpf = '$cpf'";
$resultado= mysqli_query($conexao, $sql);
$dados= mysqli_fetch_array($resultado);
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

         <div class="container">
            <div class="row">
            <div class="col-5"> 
            <div class="card">
            <div class="form-group">
               <H2> Olá, <?php echo $dados['nome']; ?></H2>
               <hr><br>
               <H3> Seu saldo é: R$ <?php echo $dados['saldo']; ?></H3><br><br><br> 
            <ul class="nav justify-content-center">
             
            <li ><br>
              <a href="sacar.php"><input type="submit" value="Saque" class="btn btn-success"></a><br>
            </li>
            <li><br>
              <a href="depositar.php"><input type="submit" value="Depósito" class="btn btn-primary"></a><br>
            </li>
            <li><br>
              <a href="logout.php"><input type="submit" value="Logout" class="btn btn-danger"></a>
            </li>
          </ul>               
                   
               </div> 

               <br><br>      
                     
                     
  
             <div class="form-group">
             </div> 
             </div>
      <script src="js/jquery-3.3.1.slim.min"></script>
      <script src="js/bootstrap.min.js"></script>   
      </div>
     </body>
  </html>