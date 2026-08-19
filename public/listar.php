<?php
include "../infra/conexao.php";
$query_pratos = mysqli_query($conexao, "SELECT * FROM pratos");
?>

<!DOCTYPE html>
<html lang="pt-br">

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
            
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Responsável</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
                <?php while ($prato = mysqli_fetch_assoc($query_pratos)) { ?>
                    <tr>
                        <td><?php echo $prato["id"]; ?></td>
                        
                        <!-- Exemplo buscando o usuário/responsável associado se houver relacionamento -->
                        <td><?php echo $prato["responsavel"] ?? 'N/A'; ?></td>
                        
                        <td><?php echo $prato["nome"]; ?></td>
                        <td><?php echo $prato["descricao"]; ?></td>
                        <td><?php echo $prato["preco"]; ?></td>
                        <td><?php echo $prato["categoria"]; ?></td>

                        <td>
                            <a href="editar.php?id=<?php echo $prato["id"]; ?>">Editar</a>
                            <a href="excluir.php?id=<?php echo $prato["id"]; ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
    </main>

    <footer></footer>

</body>

</html>