<?php


$servername = "localhost";
$username = "root"; 
$password = "";
$database = "snack_table";

// Criando a conexão 
$conn = mysqli_connect($servername, $username, $password, $database);

$conn->set_charset("utf8");

// Verificando a conexão
if (!$conn) {
    die("A conexão do BD falhou" . mysqli_connect_error());
}

$result = $conn->query("SELECT * FROM snack_table.produtos join valores on produtos.idprodutos =valores.id_valores;");

//$result = $conn->mysqli_query("SELECT * FROM produtos ");
$produtos = [];

while ($row = mysqli_fetch_assoc($result)){
    $produtos [] = $row;
}

header("Access-Control-Allow-Origin:*");
echo json_encode($produtos);

?>