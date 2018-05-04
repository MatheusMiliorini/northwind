<?php
    include_once("cabecalho.php");
    include_once("cp_input.php");
    include_once("conecta.php");
    include_once("regiao-database.php");

    $conexao = new BancoDeDados();
    $reg = new Regiao($conexao);
?>

    <form action="altera-territorio.php" method="POST">
        <input type="hidden" value="<?=$_GET['ID']?>" name="id">
        <div class="form-group">
            <?php
                $form = new CpInput("nome","text","Nome");
                echo $form->render();
            ?>
        </div>
        <div class="form-group">
            <label for="regiao">Região</label>
            <select name="regiao" id="regiao" class="form-control">
                <?php $reg->listaRegioes($reg->buscaRegioes()); ?>
            </select>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>

<?php
    include_once("rodape.php");
?>    