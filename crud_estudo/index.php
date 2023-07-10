<?php
require_once 'conexao.php';

// Obter todos os produtos do banco de dados
$sqlListarProduto = "SELECT * FROM produtos";
$resultProduto = $conn->query($sqlListarProduto);

// Exibir a página inicial
?>

<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = $resultProduto->fetch_assoc()) { ?> <!-- É usado para percorrer os resultados de uma consulta 
                                                            ao banco de dados, o loop continuará até que não haja 
                                                            mais linhas a serem recuperadas do resultado da consulta. -->
            <tr>
                <td><?php echo $row['id']; ?></td> <!-- é usada para exibir o valor da coluna x -->
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['descricao']; ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a>
                    <a href="remover.php?id=<?php echo $row['id']; ?>">Remover</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <a href="adicionar.php">Adicionar Produto</a>
</body>
</html>


