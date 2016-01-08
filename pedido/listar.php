<?php include "../includes/header.php"; ?>


<?php

include "../includes/conexao_bd.php";

$sql_query = "SELECT Pedido.id as pedido_id, Cliente.nome as cliente_nome, Produto.nome as produto_nome FROM Pedido "
      ."JOIN Produto ON Produto.id = Pedido.Produto_id JOIN Cliente ON Cliente.id = Pedido.Cliente_id";

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
                <th>Cliente</th>
                <th>Produto</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            <?php
            foreach ($resultado as $linha) {
                echo "<tr>";
                echo "<td>" . $linha['pedido_id'] . "</td>";
                echo "<td>" . $linha['cliente_nome'] . "</td>";
                echo "<td>" . $linha['produto_nome'] . "</td>";
                echo "<td><a class=\"btn btn-default\"><i class=\"fa fa-pencil\"></i></a></td>";
                echo "<td><a href=\"/pedido/dbdelete.php?id=".$linha['id']."\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>";
                echo "</tr>";
            }
            ?>
        </table>

    </div>

    <a href="/pedido/cadastrar.php" class="btn btn-default"> Adicionar Pedido</a>
</div>
<br/>

<?php include "includes/footer.php"; ?>
