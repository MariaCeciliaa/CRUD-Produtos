<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    // Atualizar o produto no banco de dados
    $sql = "UPDATE produtos SET nome='$nome', descricao='$descricao' WHERE id='$id'";
    $conn->query($sql);

    // Redirecionar para a página inicial       
    header('Location: index.php');
    exit;
}

// Obter o produto pelo ID
$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" required>
        <br>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"><?php echo $row['descricao']; ?></textarea>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
