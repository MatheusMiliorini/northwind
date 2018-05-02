<?php
    include_once("cabecalho.php");
    include_once("cp_input.php");
?>
    <form action="cadastro-regiao.php" method="POST">
        <div class="form-group">
         <?php
            $form = new CpInput("nome","text","Nome");
            echo $form->render();
         ?>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>
<?php
    include_once("rodape.php");
?>