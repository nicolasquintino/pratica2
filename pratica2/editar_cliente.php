<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM Clientes WHERE id=$id";
$result = $conn->query($sql);
$cliente = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "UPDATE Clientes SET nome_completo='$nome', cpf='$cpf', email='$email', telefone='$telefone' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Cliente atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar cliente: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Editar Cliente</title>
</head>
<body>
    <h2>Editar Cliente</h2>
    <form method="POST">
        Nome: <input type="text" name="nome" value="<?= $cliente['nome_completo'] ?>" required><br>
        CPF: <input type="text" name="cpf" value="<?= $cliente['cpf'] ?>" required><br>
        Email: <input type="email" name="email" value="<?= $cliente['email'] ?>" required><br>
        Telefone: <input type="text" name="telefone" value="<?= $cliente['telefone'] ?>"><br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
