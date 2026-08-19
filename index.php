<?php

include "infra/conexao.php";
$pratos = mysqli_query($conexao, "SELECT * FROM usuario");

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
        <h2>Cadastro de Usuario </h2>
        <form action="public/cadastro_usuario.php" method="POST">
            <label for="Nome_User">Nome do Usuario: <br></label>
            <input type="text" name="Nome_User" require>
            <br>
            <label for="Email">Email <br></label>
            <input type="email" name="Email" required>
            <br>
            
            <button type="submit">Cadastrar</button>   
        </form>   
        
        <br>

    </main>
    <footer>

    </footer>


</body>

</html>