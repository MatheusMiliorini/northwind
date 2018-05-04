<?php
    include_once("cabecalho.php");
    include_once("cp_input.php");

?>

    <form action="altera-regiao.php" method="POST">
        <div class="form-group">
        <h3 class="meio">Alterar região <?=$_GET['ID']?></h3>
        <input type="hidden" name="IDRegiao" value="<?=$_GET['ID']?>">
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