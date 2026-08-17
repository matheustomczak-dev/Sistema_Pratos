<?php

include "../infra/conexao.php";
$pratos = mysqli_query($conexao, "SELECT * FROM pratos");
$usuario = mysqli_query($conexao, "SELECT * FROM usuario");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem dos Pratos Cadastrados</title>
</head>

<body>
    
    <header>
        <h1>Listagem dos Pratos</h1>
    </header>

    <main>

        <div>
            
            <table>
                <tr>
                    <th>ID</th>
                    <th>Responsavel</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                </tr>
                <?php while ($pratos = mysqli_fetch_assoc($pratos)) { ?>
                    <tr>
                        <td><?php echo $pratos["id"] ?></td>
                        <td><?php echo $usuario["responsavel"] ?></td>
                        <td><?php echo $pratos["nome"] ?></td>
                        <td><?php echo $pratos["descricao"] ?></td>
                        <td><?php echo $pratos["preço"] ?></td>
                        <td><?php echo $pratos["categoria"] ?></td>

                        <td>
                            <a href="public/editar.php?id=<?php echo $pratos["id"] ?>">Editar</a>
                            <a href="public/excluir.php?id=<?php echo $pratos["id"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>

    </main>
    <footer>

    </footer>

</body>

</html>