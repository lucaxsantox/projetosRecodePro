<?php
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $database = "snack_table";

    // Criando a conexão 
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificando a conexão
    if (!$conn) {
    die("A conexão do BD falhou" . mysqli_connect_error());
}
    if(isset($_POST['nome']) && isset($_POST['mensagem'])){
        $nome = $_POST['nome'];
        $mensagem = $_POST['mensagem'];
    }


?>




<!DOCTYPE html>
<html lang="pt-BR">

<head>
        <meta charset= "UTF-8">
        <title>Contato - Snack Table</title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- Início do Menu-->
    <?php
    include('menu.html');
    ?>
    <!-- Fim do menu--> 

    <div class="jumbotron jumbotron-fluid" style="background-color: white;">
            <div class="container">
                <h1 class="display-4">Contato</h1>
            </div>
    </div>
    
    <hr>
    <div class="jumbotron jumbotron-fluid" style="background-color: white;">
            <div class="container">


    <div class="card-deck">
    <div class="card-group col-3">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">
                <img class="card-img-top" src="./Imagens/logo_email.png" alt="Card image cap" style="width:40px">
            </div>
                <div class="card-body text-dark">
                    <h5 class="card-title">contato@sbacktable.com</h5>
                </div>
        </div> 
    </div>
    <div class="card-group col-3">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">
                <img class="card-img-top"  src="./Imagens/logo_whatsapp.png" alt="Card image cap" style="width:40px">
            </div>
                <div class="card-body text-dark">
                    <h5 class="card-title">(21) 99999-9999</h5>
                </div>
        </div> 
    </div>
    <div class="card-group col-3">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">
                <img class="card-img-top" src="./Imagens/twitter-logo-1-1.png" alt="Card image cap" style="width:40px">
            </div>
                <div class="card-body text-dark">
                    <h5 class="card-title">@snack_table</h5>
                </div>
                </div> 
        </div>
    </div>
    </div>
    

     </div>
    </div>



    <div class="jumbotron jumbotron-fluid" style="background-color: white;">
            <div class="container">
            <form method="post" action="postcontato.php">
    <div class="form-group">
            <label for="exampleFormControlInput1">Nome</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nome_cliente" placeholder="Diga seu nome">
    </div>
  
  
    <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensagem_cliente" placeholder="Escreva sua mensagem."></textarea>
    </div>
    <button type="submit" class="btn btn-danger mb-2">Enviar Mensagem</button>
    </form>
            </div>
    </div>





    

        
        <footer id="rodape">
            <h4>Formas de Pagamento</h4>
                <img src="./Imagens/formas_de_pagamento.png" alt="Formas de pagamento">
            <p>&copy;Recode Pro</p>
        </footer>
</body>
</html>