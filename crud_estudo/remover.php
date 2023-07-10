<?php
require_once 'conexao.php';

// Remover o produto do banco de dados
$id = $_GET['id'];
$sql = "DELETE FROM produtos WHERE id='$id'";
$conn->query($sql);

// Redirecionar para a página inicial
header('Location: index.php');
exit;
?>
