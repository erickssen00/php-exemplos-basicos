<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio</title>
</head>
<body>
    <form method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required><br>

        <label>Ano de Nascimento:</label>
        <input type="number" name="ano" required><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $ano = $_POST['ano'];
    $idade = date('Y') - $ano;

    if ($idade >= 18) {
        echo "Acesso permitido, $nome!";
        
        // Salva no arquivo
        $log = "Nome: $nome - Idade: $idade\n";
        file_put_contents('log_acessos.txt', $log, FILE_APPEND);
    } else {
        echo "Acesso negado, $nome!";
    }
}
?>