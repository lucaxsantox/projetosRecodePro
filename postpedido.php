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


if(isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['telefone']) 
&& isset($_POST['nome_do_produto']) && isset($_POST['quantidade'])){
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $nome_do_produto = $_POST['nome_do_produto'];
    $quantidade = $_POST['quantidade'];


    $sql = "INSERT into tabela_de_pedidos (nome_do_cliente, endereco, telefone, nome_do_produto, quantidade) 
    values ('$nome', '$endereco', $telefone, '$nome_do_produto', $quantidade);";
    $result = $conn->query($sql);

    

    if ($result){
        echo "<script>alert('Pedido enviado com sucesso!');</script>";
        header("Location: produtos.php");
    } 


    }
    else {
         echo "<script>alert('Houve um erro ao salvar...');</script>";
    }
    };

?>