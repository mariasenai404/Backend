<?php
//declaração de uma variavel
    $nome = 'Valter';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML - PHP</title>
</head>
<body>
    <h1> Bem vindo 
        <?php 
        //teste para saida de uma variavel em php  e html
            echo $nome;
            echo ' <h1> Olá meu SENAI';
        ?>
    </h1>
</body>
</html>