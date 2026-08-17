<?php

include "../infra/conexao.php";

$nome_usuario = $_POST["Nome_User"];
$email = $_POST["Email"];
$nome = $_POST["nome_prato"];
$descricao = $_POST["descricao"];
$preco = $_POST["valor_prato"];
$categoria = $_POST["categoria"];

mysqli_query($conexao, "INSERT INTO usuario (nome, email) VALUES ('$nome_usuario', '$email')");

mysqli_query($conexao, "INSERT INTO pratos (nome, descricao, preco, categoria) VALUES ('$nome', '$descricao', '$preco', '$categoria')");

header("Location: ../index.php");

?>