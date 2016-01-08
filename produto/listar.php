<?php include "../includes/header.php"; ?>


<?php

include "../includes/conexao_bd.php";
$sql_query = "SELECT id, nome, preco, descricao FROM Produto ORDER BY nome ASC";

$stmt = $pdo->prepare($sql_query);
$stmt->execute();
$resultado = $stmt->fetchAll();

?>

<div class="container" role="main">
    <div class="jumbotron">
        <h3>Listar Produtos</h3>
        <hr/>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            <?php
            foreach ($resultado as $linha) {
                echo "<tr>";
                echo "<td>" . $linha['id'] . "</td>";
                echo "<td>" . $linha['nome'] . "</td>";
                echo "<td>R$ " . $linha['preco'] . "</td>";
                echo "<td>" . $linha['descricao'] . "</td>";
                echo "<td><a class=\"btn btn-default\"><i class=\"fa fa-pencil\"></i></a></td>";
                echo "<td><a href=\"/produto/dbdelete.php?id=".$linha['id']."\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>";
                echo "</tr>";
            }
            ?>
        </table>

    </div>

    <a href="/produto/cadastrar.php" class="btn btn-default"> Adicionar Produto</a>
</div>
<br/>

<?php include "../includes/footer.php"; ?>
