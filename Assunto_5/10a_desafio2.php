<!-- Digite sua solução para o desafio (AQUI) -->
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
 </head>
 <body>
    <form method="post">
        <label>Nome do Produto:</label>
        <input type="text" name="nome" required><br>

        <label>Preço:</label>
        <input type="number" name="preco" step="0.01" min="0" required><br>

        <button type="submit">Cadastrar Produto</button>
    </form>
 </body>
 </html>

 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];

    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "Senai@118";
    $dbname = "exercicio";

      $conn = new mysqli($servername, $username, $password, $dbname);{
      if ($conn->connect_error) {
      die("Falha na conexão: " . $conn->connect_error);
      }

         $sql = "INSERT INTO produtos  (nome, preco) VALUES ('$nome','$preco')";

         if ($conn->query($sql) === TRUE) {
               echo "<p style='color: Darkgreen;'>Produto cadastrado com sucesso!</p>";
         } else {
               echo "<p style='color: red;'>Erro ao cadastrar</p>";
         }
         if ($preco < 0) {
    echo "<p style='color: red;'>O preço não pode ser negativo!</p>";
         }

         // Fecha a conexão
         $conn->close();

      }
 }
?>