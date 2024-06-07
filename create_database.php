<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$database = "cadastro"; // Nome do banco de dados a ser criado

// Conexão com o servidor MySQL
$conn = new mysqli($servername, $username, $password);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Cria o banco de dados
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Banco de dados criado com sucesso<br>";
} else {
    echo "Erro ao criar banco de dados: " . $conn->error;
}

// Seleciona o banco de dados
$conn->select_db($database);

// Cria uma tabela de exemplo
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    senha VARCHAR(50) NOT NULL,
    data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'usuarios' criada com sucesso<br>";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
