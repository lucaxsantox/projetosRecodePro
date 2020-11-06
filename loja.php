<!DOCTYPE html>
<html lang="pt-BR">

<head>
        <meta charset= "UTF-8">
        <title>Nossas Lojas - Snack Table</title> 
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
                <h1 class="display-4">Nossas lojas</h1>
                    <p class="lead">Encontre a loja mais perto da sua casa.</p>
            </div>
    </div>
        
    
    <hr>

    <table class="table-bordered table-dark" width="100%" cellpadding="20">
        <thead>
            <tr style="vertical-align: top;">

                    <th>Rio de Janeiro</th>
                    <th >Minas Gerais</th>
                    <th rowspan="1">São Paulo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                    
                    <td>Rua do Arquiteto, 150</td>
                    <td>Rua São Marcelino, 208</td>
                    <td>Rua da estação, 35</td>
            </tr>
            <tr>
                    <td>2 &ordm; andar</td>
                    <td>5 &ordm; andar</td>
                    <td>1 &ordm; andar</td>
            </tr>   
            <tr>
                    <td>Recreio dos Bandeirantes</td>
                    <td>Novo Cruzeiro</td>
                    <td>Osasco<td>
            </tr> 
            <tr>
                    <td>(21) 2121-2121</td>
                    <td>(31) 3131-3131</td>
                    <td>(11) 1111-1111</td>
            </tr>
        </tbody>
    </table>            

    <br> <br> <br> <br>

    <footer id="rodape">
        <h4>Formas de Pagamento</h4>
            <img src="./Imagens/formas_de_pagamento.png" alt="Formas de pagamento">
        <p>&copy;Recode Pro</p>
    </footer>
</body>
</html>