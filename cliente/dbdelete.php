<?php

include "../includes/conexao_bd.php";

$cliente_id = $_GET['id'];

$sql_query = "DELETE FROM Cliente WHERE id = :id";

$stmt = $pdo->prepare($sql_query);
$stmt->bindValue(":id", $cliente_id);

$url = "/cliente/confirmar.php";

if ($stmt->execute()) {
    header('Location: ' . $url ."?sucesso=1");
} else {
    header('Location: ' . $url ."?sucesso=0");
}