<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO Clientes (nome_completo, cpf, email, telefone) VALUES ('$nome', '$cpf', '$email', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar cliente: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h2>Cadastrar Cliente</h2>
    <form method="POST">
        Nome: <input type="text" name="nome" required><br>
        CPF: <input type="text" name="cpf" maxlength="11" required><br>
        Email: <input type="email" name="email" required><br>
        Telefone: <input type="text" name="telefone"><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
