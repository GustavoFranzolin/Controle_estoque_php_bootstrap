<?php
include "../includes/conexao_bd.php";

$produto = $_POST['produto'];
$cliente= $_POST['cliente'];

$sql_query = "INSERT INTO Pedido (Produto_id, Cliente_id) VALUES (:produto_id, :cliente_id)";

$stmt = $pdo->prepare($sql_query);
$stmt->bindValue(":produto_id", $produto);
$stmt->bindValue(":cliente_id", $cliente);

$url = "/pedido/cadastrar.php";
if ($stmt->execute()) {
    header('Location: ' . $url ."?sucesso=1");
} else {
    header('Location: ' . $url ."?sucesso=0");
}
