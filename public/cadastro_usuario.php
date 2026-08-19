<?php

include "../infra/conexao.php";

$responsavel = $_POST["Nome_User"];
$email = $_POST["Email"];

$sql_usuario = "INSERT INTO usuario (responsavel, email)
                VALUES ('$responsavel', '$email')";

mysqli_query($conexao, $sql_usuario);

header("Location: tela_inicial.php");

?>