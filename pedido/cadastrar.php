<?php include "../includes/header.php"; ?>


<?php

include "../includes/conexao_bd.php";
$sql_query_cliente = "SELECT id as id_cliente, nome as nome_cliente FROM Cliente ORDER BY nome ASC";

$stmt = $pdo->prepare($sql_query_cliente);
$stmt->execute();

$resultado_cliente = $stmt->fetchAll();

$sql_query_produto = "SELECT id as id_produto, nome as nome_produto FROM Produto ORDER BY nome ASC";

$stmt = $pdo->prepare($sql_query_produto);
$stmt->execute();
$resultado_produto = $stmt->fetchAll();
?>

<div class="container" role="main">
    <div class="jumbotron">
        <h3>Cadastrar Novo Pedido</h3>
        <hr/>

        <?php
        if (isset($_GET['sucesso'])) {
            if ($_GET['sucesso'] == 1) {
                echo "<div class=\"alert alert-success\" role=\"alert\">Pedido cadastrado com sucesso!</div>";
            } else {
                echo "<div class=\"alert alert-danger\" role=\"alert\">Problema ao cadastrar o pedido!</div>";
            }
        }
        ?>
        <br/>

        <form action="dbinsert.php" method="post">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="cliente">Selecione o Cliente</label>
                        <select class="form-control" id="cliente" name="cliente">
                            <?php
                            foreach ($resultado_cliente as $cliente) {
                                echo "<option value=\"" . $cliente['id_cliente'] . "\">" . $cliente['nome_cliente'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="produto">Selecione o Produto</label>
                        <select class="form-control" id="produto" name="produto">
                            <?php
                            foreach ($resultado_produto as $produto) {
                                echo "<option value=\"" . $produto['id_produto'] . "\">" . $produto['nome_produto'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Cadastrar Pedido</button>
        </form>
    </div>
</div>
<br/>

<?php include "../includes/footer.php"; ?>
