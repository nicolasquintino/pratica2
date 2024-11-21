<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM Clientes WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Cliente excluído com sucesso!";
} else {
    echo "Erro ao excluir cliente: " . $conn->error;
}
?>
<a href="listar_clientes.php">Voltar</a>
