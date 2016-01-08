<?php
include "../includes/conexao_bd.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql_query = "INSERT INTO Cliente (nome, email, telefone) VALUES (:nome, :email, :telefone)";

$stmt = $pdo->prepare($sql_query);
$stmt->bindValue(":nome", $nome);
$stmt->bindValue(":email", $email);
$stmt->bindValue(":telefone", $telefone);

$url = "cadastrar.php";
if ($stmt->execute()) {
    header('Location: ' . $url ."?sucesso=1");
} else {
    header('Location: ' . $url ."?sucesso=0");
}
