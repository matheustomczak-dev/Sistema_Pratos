<?php
include "../infra/conexao.php";
$query_pratos = mysqli_query($conexao, "SELECT * FROM pratos");

$sql = "SELECT * FROM usuario";

$usuarios = mysqli_query($conexao,$sql);


?>

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
        <h2>Cadastro de Pratos </h2>
        <form action="cadastro_prato.php" method="POST">

            <select name="id_responsavel">
                <option value="">Selecione o Usuario</option>


                <option value="1"></option>


            </select>
            <br>
            <label for="nome_prato"> Nome do Prato </label>
            <input type="text" name="nome_prato" required>
            <br>
            <label for="descricao"> Descrição do prato </label>
            <input type="text" name="descricao" required>
            <br>
            <label for="valor_prato"> Valor do Prato </label>
            <input type="number" name="valor_prato" required>
            <br>
            <label for="categoria">Categoria do Prato</label>
            <input type="text" name="categoria" required>
            <br>

            <button type="submit">Cadastrar</button>
        </form>

        <br>

        <a href="public/listar.php"><button type="submit">Listar</button></a>

    </main>
    <footer>

    </footer>


</body>

</html>