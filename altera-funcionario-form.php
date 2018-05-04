<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('funcionario-database.php');
    include_once("regiao-database.php");
    include_once("cp_input.php");
    include_once("territorio-database.php");

    $conexao = new BancoDeDados();
    $func = new Funcionario($conexao);
    $reg = new Regiao($conexao);
    $ter = new Territorio($conexao);

    $funcionarios = $func->buscarFuncionarios();

    $estefuncionario = $func->buscarInfoFuncionario($_GET['ID']);
?>
    <form action="altera-funcionario.php" method="post">

        <input type="hidden" name="IDFuncionario" value="<?=$_GET['ID']?>">

        <div class="col-md-6">
            <div class="form-group">
                <?php
                    $input = new CpInput("nome","text","Nome",$estefuncionario['Nome']);
                    echo $input->render();
                ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <?php
                    $input = new CpInput("sobrenome","text","Sobrenome",$estefuncionario['Sobrenome']);
                    echo $input->render();
                ?>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <?php
                    $input = new CpInput("titulo","text","Titulo",$estefuncionario['Titulo']);
                    echo $input->render();
                ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?php
                    $input = new CpInput("titulocortesia","text","Titulo Cortesia",$estefuncionario['TituloCortesia']);
                    echo $input->render();
                ?>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <?php
                    $input = new CpInput("datanascimento","date","Data de Nascimento"); //Não deu certo pra preencher com data...
                    echo $input->render();
                ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?php
                    $input = new CpInput("dataadmissao","date","Data de Admissão"); //Não deu certo pra preencher com data...
                    echo $input->render();
                ?>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <?php
                    $input = new CpInput("endereco","text","Endereço",$estefuncionario['Endereco']);
                    echo $input->render();
                ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php
                    $input = new CpInput("cidade","text","Cidade",$estefuncionario['Cidade']);
                    echo $input->render();
                ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="regiao">Região</label>
                <select name="regiao" id="regiao" class="form-control">
                    <?php $reg->listaRegioes($reg->buscaRegioes()); ?>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php
                    $input = new CpInput("cep","number","CEP",$estefuncionario['Cep']);
                    echo $input->render();
                ?>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="territorio">Território</label>
                <select name="territorio" id="territorio" class="form-control">
                    <?php $ter->listaTerritorios($ter->buscaTerritorios()); ?>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php
                    $input = new CpInput("pais","text","País",$estefuncionario['Pais']);
                    echo $input->render();
                ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php
                    $input = new CpInput("telefoneresidencial","text","Telefone Residencial",$estefuncionario['TelefoneResidencial']);
                    echo $input->render();
                ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php
                    $input = new CpInput("extensao","text","Extensão",$estefuncionario['Extensao']);
                    echo $input->render();
                ?>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <?php
                    $input = new CpInput("notas","text","Notas",$estefuncionario['Notas']);
                    echo $input->render();
                ?>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="repotase">Reporta-se à</label>
                <select name="reportase" id="reportase" class="form-control">
                    <?php foreach ($funcionarios as $funcionario): ?>
                        <option value="<?=$funcionario['IDFuncionario']?>"><?=$funcionario['Nome'].' '.$funcionario['Sobrenome']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-success totalwidth">Submit</button>
            </div>
        </div>
    </form>
<?php
    include_once('rodape.php');
?>