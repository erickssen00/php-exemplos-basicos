<?php
// Conecta ao banco de dados
$servername = "localhost";
$username = "root";
$password = "Senai@118";
$dbname = "exercicio";

// Conectado de fato
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificação da conexão e possíveis erros
if ($conn->connect_error) {
    // Se conexão falhar mostra mensagem de erro
    die("Falha na conexão: " . $conn->connect_error);
}

// Senão segue para consulta normalmente
$sql = "SELECT id, nome, email FROM clientes";
$result = $conn->query($sql);

// Verifica se existem registros e os exibe em formato de tabela
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum cliente encontrado.";
}

// Fecha a conexão
$conn->close();
?>