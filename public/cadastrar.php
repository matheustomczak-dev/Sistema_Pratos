<?php

include "../infra/conexao.php";

$responsavel = $_POST["Nome_User"];
$email = $_POST["Email"];

$nome = $_POST["nome_prato"];
$descicao = $_POST["descricao"];
$preco = $_POST["valor_prato"];
$categoria = $_POST["categoria"];

$sql_usuario = "INSERT INTO usuario (responsavel, email)
                VALUES ('$responsavel', '$email')";

mysqli_query($conexao, $sql_usuario);

$sql_prato = "INSERT INTO pratos (nome, descicao, preco, categoria)
              VALUES ('$nome', '$descicao', '$preco', '$categoria')";

mysqli_query($conexao, $sql_prato);

header("Location: ../index.php");

?>