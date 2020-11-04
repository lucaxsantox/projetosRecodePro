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
        <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <!-- Início do Menu-->
    <?php
    include('menu.html');
    ?>
    <!-- Fim do menu--> 

    <h1>Contato</h1>
    
    <hr>

    <table border=0 width="100%" cellpadding="20">
        <tr>
            <td width="30%" align="center">
                <img src="./Imagens/logo_email.png" width="40px">
               contato@snacktable.com
            </td>

            <td width="40%" align="center">
                <img src="./Imagens/logo_whatsapp.png" width="40px">
                (21) 99999-9999
            </td>

            <td width="40%" align="center">
                <img src="./Imagens/twitter-logo-1-1.png" width="40px">
                @snack_table
            </td>
        </tr>

    </table>
    
    <br> <br> <br> <br>

    <form method="post" action=""> 
        <h4 id="nome_contato">Nome: </h4>
        <input type="text" name="nome" style="width: 400px;">
        <br><br>
        <h4 id="nome_mensagem">Mensagem: </h4>
        <input type="text"  name="mensagem" style="width: 400px; resize: none; height: 20px;">
        <br><br>

        <input type="submit" name="submit" value="Enviar">

    </form>
    <br> <br> <br> <br> 
        <br> <br> <br> <br> <br> 
        <br> <br> <br> <br> <br>
        
        <footer id="rodape">
            <h4>Formas de Pagamento</h4>
                <img src="./Imagens/formas_de_pagamento.png" alt="Formas de pagamento">
            <p>&copy;Recode Pro</p>
        </footer>
</body>
</html>