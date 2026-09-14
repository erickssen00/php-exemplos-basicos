<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <form method="post" action="">
        <!-- Campo Nome -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" require><br>

        <!-- Campo Senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha" require><br>

        <!-- Botão de enviar -->
        <button type="submit">Cadastrar</button>
    </form>
    <?php
    // Verificar se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Recebe os valores enviados pelo formulário
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // Abre o arquivo usuarios.txt para escrita (adiciona dados ao final do arquivo)
        $arquivo = fopen('usuarios.txt', 'a');

        //Cria uma linha com o nome e a senha separados por ";"
        $linha = $nome . ';' . $senha . "\n";

        // Escreve a linha no arquivo
        fwrite($arquivo, $linha);

        // Fecha o arquivo
        fclose($arquivo);
        echo "<p>Usuário cadastrado com sucesso!</p>";
    }
    ?>
</body>

</html>