<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('funcionario-database.php');
    include_once("regiao-database.php");
    include_once("cp_input.php");

    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $func = new Funcionario($conexao);
    $reg = new Regiao($conexao);

    $funcionarios = $func->buscarFuncionarios();
    $regioes = $reg->listaRegioes();
?>
    <form action="cadastro-funcionario.php" method="post">
        <div class="col-md-6">
            <div class="form-group">
                <?php
                    $input = new CpInput("nome","text","Nome");
                    echo $input->render();
                ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <?php
                    $input = new CpInput("sobrenome","text","Sobrenome");
                    echo $input->render();
                ?>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <?php
                    $input = new CpInput("titulo","text","Titulo");
                    echo $input->render();
                ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?php
                    $input = new CpInput("titulocortesia","text","Titulo Cortesia");
                    echo $input->render();
                ?>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <?php
                    $input = new CpInput("datanascimento","date","Data de Nascimento");
                    echo $input->render();
                ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?php
                    $input = new CpInput("dataadmissao","date","Data de Admissão");
                    echo $input->render();
                ?>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <?php
                    $input = new CpInput("endereco","text","Endereço");
                    echo $input->render();
                ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php
                    $input = new CpInput("cidade","text","Cidade");
                    echo $input->render();
                ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="regiao">Região</label>
                <select name="regiao" id="regiao" class="form-control">
                    <?php foreach ($regioes as $regiao): ?>
                        <option value="<?=$regiao['IDRegiao']?>"><?=$regiao['DescricaoRegiao']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php
                    $input = new CpInput("cep","number","CEP");
                    echo $input->render();
                ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <?php
                    $input = new CpInput("pais","text","País");
                    echo $input->render();
                ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php
                    $input = new CpInput("telefoneresidencial","text","Telefone Residencial");
                    echo $input->render();
                ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php
                    $input = new CpInput("extensao","text","Extensão");
                    echo $input->render();
                ?>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <?php
                    $input = new CpInput("notas","text","Notas");
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