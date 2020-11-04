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


        <form method="post" action="postpedido.php">
            <div class="form-row">
                <div class="form-group col-md-5">
                            <label for="inputNome">Nome:</label>
                            <input type="text" class="form-control"  name= "nome" placeholder="Nome">
                </div>
            </div>
  
            <div class="form-row"> 
                <label for="inputAddress">Endereço</label>
                <input type="text" class="form-control"  name= "endereco" placeholder="Digite seu endereço">
            </div>
            <div class="form-row"> 
                <label for="inputAddress">Telefone</label>
                <input type="number" class="form-control"  name= "telefone" placeholder="Digite seu telefone para contato">
            </div>
            <div class="form-group">
                <label for="escolher produto">Escolha seu produto</label>
                <select class="form-control" name="nome_do_produto">
                        <option></option>
                        <option>Salgadinho Ebicen Cebola 30G</option>
                        <option>Salgadinho Ebicen Pimenta 30G</option>
                        <option>Salgadinho Doritos Spicy Sweet Chili Flavored Tortilla Chips 276G</option>
                        <option>Salgadinho Prings Paprika 165G</option>
                        <option>Torrada Bauducco Tradicional 142G</option>
                        <option>Torrada Bauducco Integral 142G</option>
                        <option>Torrada Bauducco Multrigrãos 142G</option>
                        <option>Biscoito Recheado Óreo 140G</option>
                        <option>Biscoito Recheado Trakinas Chocolate 126G</option>
                        <option>Chocolate Choco Soy Meio Amargo 80G</option>
                        <option>Chocolate Choco Soy Tradicional 80G</option>
                        <option>Chocolate zero açúcar ao leite de coco em tablete LOOV 25G</option>
                        <option>Chocolate zero açúcar branco em tablete LOOV 25G</option>
                        <option>Geleia de Amora Diet Queensberry 280G</option>
                        <option>Cajutella Bioporã 210G</option>
                        <option>Creme de Chocolate Zero Açúcar Loov Recheio Brown 160g<option>
                </select>
            </div>   
            
            <div class="form-group">
                        <label for="quantidade">Escolha a quantidade</label>
                        <select class="form-control" name= "quantidade">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
  </div>
  
  <button type="submit" name="submit" class="btn btn-danger">Enviar pedido!</button>
</form>
             
                

                        <footer id="rodape">
            <h4>Formas de Pagamento</h4>
                <img src="./Imagens/formas_de_pagamento.png" alt="Formas de pagamento">
            <p>&copy;Recode Pro</p>
        </footer>
</body>
</html>