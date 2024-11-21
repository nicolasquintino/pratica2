<?php
include 'db.php';

$sql = "SELECT * FROM Clientes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Lista de Clientes</title>
</head>
<body>
    <h2>Clientes Cadastrados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nome_completo'] ?></td>
                <td><?= $row['cpf'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['telefone'] ?></td>
                <td>
                    <a href="editar_cliente.php?id=<?= $row['id'] ?>">Editar</a> |
                    <a href="excluir_cliente.php?id=<?= $row['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
