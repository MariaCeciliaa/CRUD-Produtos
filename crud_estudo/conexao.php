<?php
// Criar a conexão
$conn = new mysqli("localhost", "root", "", "crudteste");

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
