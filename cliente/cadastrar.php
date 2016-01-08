<?php include "../includes/header.php" ?>

<div class="container" role="main">
    <div class="jumbotron">
        <h3>Cadastrar Novo Cliente</h3>
        <hr/>

        <?php
        if (isset($_GET['sucesso'])) {
            if ($_GET['sucesso'] == 1) {
                echo "<div class=\"alert alert-success\" role=\"alert\">Cliente cadastrado com sucesso!</div>";
            } else {
                echo "<div class=\"alert alert-danger\" role=\"alert\">Problema ao cadastrar cliente!</div>";
            }
        }
        ?>
        <br/>

        <form class="form-horizontal" action="dbinsert.php" method="POST">
            <fieldset>
                <br/>

                <div class="control-group">
                    <b>Nome Cliente: </b> <br/>
                    <input type=text name="nome"/>
                </div>
                <br/>

                <div class="control-group">
                    <b>Email Cliente: </b> <br/>
                    <input type=text name="email"/>
                </div>
                <br/>

                <div class="control-group">
                    <b>Telefone Cliente </b> <br/>
                    <input type="text" name="telefone"/>
                </div>
                <br/>

                <div class="control-group">
                    <button class="btn btn-success" type="submit" name="btn_cadastrar">Cadastrar Cliente</button>
                </div>

            </fieldset>
        </form>
    </div>
</div>

<?php include "../includes/footer.php" ?>
