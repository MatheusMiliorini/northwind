<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('funcionario-database.php');
    include_once("regiao-database.php");

    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $func = new Funcionario($conexao);
    $reg = new Regiao($conexao);

    $funcionarios = $func->buscarFuncionarios();
    $regioes = $reg->listaRegioes();
?>
    <form action="cadastro-funcionario.php" method="post">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="titulocortesia">Titulo Cortesia</label>
                <input type="text" class="form-control" id="titulocortesia" name="titulocortesia">
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="datanascimento">Nascimento</label>
                <input type="date" class="form-control" id="datanascimento" name="datanascimento">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="dataadmissao">Admissão</label>
                <input type="date" class="form-control" id="dataadmissao" name="dataadmissao">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade">
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
                <label for="cep">CEP</label>
                <input type="number" class="form-control" id="cep" name="cep">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="pais">País</label>
                <input type="text" class="form-control" id="pais" name="pais">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="telefoneresidencial">Telefone Residencial</label>
                <input type="text" class="form-control" id="telefoneresidencial" name="telefoneresidencial">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="extensao">Extensão</label>
                <input type="text" class="form-control" id="extensao" name="extensao">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="notas">Notas</label>
                <input type="text" class="form-control" id="notas" name="notas">
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