<?php
//variaveis de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$Dbname = "pesquisa_de_carros";

//conexão
$conn = mysqli_connect( $servidor, $usuario, $senha, $Dbname );


$pesquisar = $_POST['pesquisar'];
 "SELECT * FROM automoveis  WHERE carros LIKE '$pesquisar' LIMIT 2 "



?>