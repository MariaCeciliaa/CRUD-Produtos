<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    // Inserir novo produto no banco de dados
    $sql = "INSERT INTO produtos (nome, descricao) VALUES ('$nome', '$descricao')";
    $conn->query($sql);

    // Redirecionar para a página inicial
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Produto</title>
</head>
<body>
    <h1>Adicionar Produto</h1>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"></textarea>
        <br>
        <button type="submit">Adicionar</button>
    </form>
</body>
</html>
