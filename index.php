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
            <input type="text" name="Nome_User">
            <br>
            <label for="Email">Email</label>
            <input type="text" name="Email">
            <br>
            <label for="nome_prato"> Nome do Prato </label>
            <input type="text" name="nome_prato">
            <br>
            <label for="descricao"> Descrição do prato </label>
            <input type="text" name="descricao">
            <br>
            <label for="valor_prato"> Valor do Prato  </label>
            <input type="number" name="valor_prato">
            <br>
            <label for="categoria"> Categoria do Prato </label>
            <input type="text" name="nome_prato">
            <br>
            
            <button type="submit">Cadastrar</button>
        </form>

         <div>
            <h2>Pratos Cadastrados</h2>
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>valor</th>
                    <th>categoria</th>
                    
                </tr>
                <?php while () { ?>
                    <tr>
                        <td><?php echo $prato["Nome"] ?></td>
                        <td><?php echo $prato["Descrição"] ?></td>
                        <td><?php echo $prato["valor"] ?></td>
                        <td><?php echo $prato["categoria"] ?></td>
                        <td>
                            <a href="public/editar.php?id=<?php echo $prato["id"] ?>">Editar</a>
                            <a href="public/excluir.php?id=<?php echo $prato["id"] ?>">Excluir</a>
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