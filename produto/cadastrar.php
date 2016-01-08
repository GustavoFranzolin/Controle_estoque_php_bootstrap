<?php include "../includes/header.php" ?>

<div class="container" role="main">
    <div class="jumbotron">
        <h3>Cadastrar Novo Produto</h3>
        <hr/>

        <?php
        if (isset($_GET['sucesso'])) {
            if ($_GET['sucesso'] == 1) {
                echo "<div class=\"alert alert-success\" role=\"alert\">Produto cadastrado com sucesso!</div>";
            } else {
                echo "<div class=\"alert alert-danger\" role=\"alert\">Problema ao cadastrar produto!</div>";
            }
        }
        ?>
        <br/>

        <form class="form-horizontal" action="dbinsert.php" method="POST">
            <fieldset>
                <br/>

                <div class="control-group">
                    <b>Nome do Produto:</b> <br/>
                    <input type=text name="nome"/>
                </div>
                <br/>

                <div class="control-group">
                    <b>Valor do Produto: </b> <br/>
                    <input type=text name="preco"/>
                </div>
                <br/>

                <div class="control-group">
                    <b>Descrição do Produto: </b> <br/>
                    <input type="text" name="descricao"/>
                </div>
                <br/>

                <div class="control-group">
                    <button class="btn btn-success" type="submit" name="btn_cadastrar">Cadastrar Produto</button>
                </div>

            </fieldset>
        </form>
    </div>
</div>

<?php include "../includes/footer.php" ?>
