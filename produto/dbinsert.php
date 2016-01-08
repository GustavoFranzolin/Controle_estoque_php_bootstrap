<?php
include "../includes/conexao_bd.php";

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

$sql_query = "INSERT INTO Produto (nome, preco, descricao) VALUES (:nome, :preco, :descricao)";

$stmt = $pdo->prepare($sql_query);
$stmt->bindValue(":nome", $nome);
$stmt->bindValue(":preco", $preco);
$stmt->bindValue(":descricao", $descricao);

$url = "/produto/cadastrar.php";
if ($stmt->execute()) {
    header('Location: ' . $url ."?sucesso=1");
} else {
    header('Location: ' . $url ."?sucesso=0");
}
