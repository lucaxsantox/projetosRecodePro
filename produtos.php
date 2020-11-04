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

?>




<!DOCTYPE html>
<html lang="pt-BR">



<head>
        <meta charset="UTF-8">
        <title>Produtos - Snack Table</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <script src="./js/funcoes.js"></script>
</head>

<body> 
        <!-- Início do Menu-->
        <?php
    include('menu.html');
    ?>
        <!-- Fim do menu--> 
    </nav>

    <header>
        <h1>Produtos</h1>
    </header>
    
    
    <hr>
    <!-- Produtos -->
        <section class="categoria">
                <h1>Categorias</h1>
                <ul>
                    <li onclick="exibir_todos()">Todos(16)</li>
                    <li onclick="exibir_categoria('Salgadinhos')">Salgadinhos(4)</li>
                    <li onclick="exibir_categoria('Torradas')">Torradas(3)</li>
                    <li onclick="exibir_categoria('Biscoitos')">Biscoitos(2)</li>
                    <li onclick="exibir_categoria('Chocolates')">Chocolates(4)</li>
                    <li onclick="exibir_categoria('GeleiasPastas')">Geleias & Pastas(3)</li>
                    <a class="btn btn-danger" href="pedido.php" role="button">Faça seu pedido!</a>
                </ul>
         </section>
         
         <section class="produtos">

        <?php $sql = "select * from produtos";
                    $result = $conn->query($sql);

                if ($result->num_rows > 0) 
                    {
                while($rows = $result->fetch_assoc()){
                    
        ?>
            <div class="box_produto" id="<?php echo $rows["categoria"]; ?>" style="display: inline-block;">
                <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="destaque(this)">
                <br><?php echo $rows["descricao"]; ?>
                <hr>
                <p class="preco_normal">R$<?php echo $rows["preco"]; ?></p>
                <p class="preco_promocao">R$<?php echo $rows["preco_final"]; ?></p>
                <br>
             </div>
             
        <?php   
                }
            }else
                {
                    echo "Nenhum produto  cadastrado";
                }
        ?>
             
        </section>
    <!-- Fim dos Produtos -->

        </tr>

    <br> <br> <br> <br>
    <footer id="rodape">
        <h4>Formas de Pagamento</h4>
            <img src="./Imagens/formas_de_pagamento.png" alt="Formas de pagamento">
        <p>&copy;Recode Pro</p>
    </footer>
</body>
</html>