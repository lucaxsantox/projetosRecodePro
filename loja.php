<!DOCTYPE html>
<html lang="pt-BR">

<head>
        <meta charset= "UTF-8">
        <title>Nossas Lojas - Snack Table</title> 
        <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <!-- Início do Menu-->
    <?php
    include('menu.html');
    ?>
    <!-- Fim do menu--> 
    
    <h1>Nossas lojas</h1>
    
    <hr>

    <table border=0 width="100%" cellpadding="20">
        <tr style="vertical-align: top;">
            <td>
                <h3>Rio de Janeiro</h3>
                <p>Rua do Arquiteto, 150</p>
                <p>2 &ordm; andar</p>
                <p>Recreio dos Bandeirantes</p>
                <p>(21) 2121-2121</p>
            </td>

            <td>
                <h3>Minas Gerais</h3>
                <p>Rua São Marcelino, 208</p>
                <p>5 &ordm; andar</p>
                <p>Novo Cruzeiro</p>
                <p>(31) 3131-3131</p>
            </td>
            
            <td>
                <h3>São Paulo</h3>
                <p>Rua da Estação, 35</p>
                <p>Osasco</p>
                <p>(11) 1111-1111</p>
            </td>
        </tr>
    </table>

    <br> <br> <br> <br>

    <footer id="rodape">
        <h4>Formas de Pagamento</h4>
            <img src="./Imagens/formas_de_pagamento.png" alt="Formas de pagamento">
        <p>&copy;Recode Pro</p>
    </footer>
</body>
</html>