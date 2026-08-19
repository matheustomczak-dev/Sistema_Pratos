<?php

include "../infra/conexao.php";

$nome = $_POST["nome_prato"];
$id_responsavel = $_POST["id_responsavel"];
$descricao = $_POST["descricao"];
$preco = $_POST["valor_prato"];
$categoria = $_POST["categoria"];

$sql_prato = "INSERT INTO pratos (usuario_responsavel,nome, descricao, preco, categoria) VALUES ('$id_respondavel','$nome', '$descricao', '$preco', '$categoria')";

mysqli_query($conexao, $sql_prato);

header("Location: tela_inicial.php");

?>