<?php

header("Access-Control-Allow-Origin:*");

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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

     $nome_cliente    = $_POST['nome_cliente'];
    
    $mensagem_cliente     = $_POST['mensagem_cliente'];
    
    


    $sql = "INSERT INTO `snack_table`.`mensagens_fale_conosco` (`nome_cliente`, `mensagem_cliente`) VALUES(null,'$nome_cliente', '$mensagem_cliente');";

    
    mysqli_query($conn, $sql);

   

    echo json_encode(array("msg" => "Método POST Efetuado"));}

    else {

        echo "Falha ao enviar sua mensagem.";

    }

?>

