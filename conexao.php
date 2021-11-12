<?php  
//inicio da conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "banking";

// abre a conexão com o banco de dados
$conexao = mysqli_connect ($servidor, $usuario, $senha, $database);

// Valida  conexão com banco de dados
if(!$conexao){
 echo "A conexão com o banco de dados falhou.";
}

?>