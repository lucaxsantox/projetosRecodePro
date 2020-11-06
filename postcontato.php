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

if(isset($_POST['nome_cliente']) && isset($_POST['mensagem_cliente'])){
    $nome_cliente = $_POST['nome_cliente'];
    $mensagem_cliente = $_POST['mensagem_cliente'];
    
    $sql = "INSERT into mensagens_fale_conosco (nome_cliente, mensagem_cliente) 
    values ('$nome_cliente', '$mensagem_cliente');";
    $result = $conn->query($sql);

    if ($result){
        echo "<script>alert('Mensagem Enviada com Sucesso!');</script>";
        header("Location: Index.php");
    }
    else {
         echo "<script>alert('Houve um erro ao enviar sua mensagem...');</script>";
    }
    };

?>