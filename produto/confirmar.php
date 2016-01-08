<?php include "../includes/header.php" ?>

<div class="container">
    <div class="jumbotron">
        <?php
        if (isset($_GET['sucesso'])) {
            if ($_GET['sucesso'] == 1) {
                echo "<div class=\"alert alert-success\" role=\"alert\">Produto excluído com sucesso!</div>";
            } else {
                echo "<div class=\"alert alert-danger\" role=\"alert\">Problema ao excluir Produto!</div>";
            }
        }
        ?>
        <br/>
        <a href="listar.php" class="btn btn-default">Voltar</a>
    </div>

</div>

<?php include "../includes/footer.php" ?>