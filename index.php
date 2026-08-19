<?php

include "infra/conexao.php";
$pratos = mysqli_query($conexao, "SELECT * FROM pratos");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD sistema pratos </title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>CRUD - Sistema Pratos</h1>
    </header>
    <main>
        <h2>Cadastro De Usuario </h2>
        <form action="public/cadastrar.php" method="POST">
            <label for="Nome_User">Nome do Usuario:</label>
            <input type="text" name="Nome_User" require>
            <br>
            <label for="Email">Email</label>
            <input type="text" name="Email" required>
            <br>
            <label for="nome_prato"> Nome do Prato </label>
            <input type="text" name="nome_prato" required>
            <br>
            <label for="descricao"> Descrição do prato </label>
            <input type="text" name="descricao" required>
            <br>
            <label for="valor_prato"> Valor do Prato  </label>
            <input type="number" name="valor_prato" required>
            <br>
            <label for="categoria">Categoria do Prato</label>
            <input type="text" name="categoria" required>
            <br>
            
            <button type="submit">Cadastrar</button>  <button type="submit">Listar</button> 
        </form>

         

    </main>
    <footer>

    </footer>


</body>

</html>