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
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    verificacao TINYINT(1),
    telefone_alternativo VARCHAR(20),
    verificacao2 TINYINT(1),
    cep VARCHAR(10),
    estado CHAR(2),
    cidade VARCHAR(100),
    rua VARCHAR(255),
    bairro VARCHAR(100),
    numero VARCHAR(10),
    data_nascimento DATE,
    data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'usuarios' criada com sucesso<br>";
    // Redirecionar para index.php após 5 segundos
    echo "<script>
            setTimeout(function() {
                window.location.href = 'index.php';
            }, 5000); // 5000 milissegundos = 5 segundos
          </script>";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
