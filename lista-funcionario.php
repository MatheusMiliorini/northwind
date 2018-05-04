<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('funcionario-database.php');

    $conexao = new BancoDeDados();
    $func = new Funcionario($conexao);
?>

    <table class="table table-striped table-bordered meio">
    <h1 class="meio">LISTA DE FUNCIONÁRIOS</h1>
    <br>
    <thead>
        <th class="meio">Nome</th>
        <th class="meio">Sobrenome</th>
        <th class="meio">Titulo</th>
        <th class="meio">Titulo Cortesia</th>
        <th class="meio">Nacimento</th>
        <th class="meio">Admissão</th>
        <th class="meio">Endereço</th>
        <th class="meio">Cidade</th>
        <th class="meio">Região</th>
        <th class="meio">CEP</th>
        <th class="meio">País</th>
        <th class="meio">Telefone Residencial</th>
        <th class="meio">Extensão</th>
        <th class="meio">Notas</th>
        <th class="meio">Reportase à</th>
        <th class="meio" colspan="2">Editar</th>
    </thead>
    <?php
        $funcionarios = $func->listaFuncionario();
        foreach ($funcionarios as $funcionario):
    ?>
    <tr>
        <td><?=$funcionario["Nome"]?></td>
        <td><?=$funcionario["Sobrenome"]?></td>
        <td><?=$funcionario["Titulo"]?></td>
        <td><?=$funcionario["TituloCortesia"]?></td>
        <td><?=$funcionario["DataNac"]?></td>
        <td><?=$funcionario["DataAdmissao"]?></td>
        <td><?=$funcionario["Endereco"]?></td>
        <td><?=$funcionario["Cidade"]?></td>
        <td><?=$funcionario["Regiao"]?></td>
        <td><?=$funcionario["Cep"]?></td>
        <td><?=$funcionario["Pais"]?></td>
        <td><?=$funcionario["TelefoneResidencial"]?></td>
        <td><?=$funcionario["Extensao"]?></td>
        <td><?=$funcionario["Notas"]?></td>
        <td><?=$funcionario["reportasea"]?></td>
        <td><a href="remove-funcionario.php?ID=<?=$funcionario['IDFuncionario']?>">Remover</a></td>
        <td><a href="altera-funcionario-form.php?ID=<?=$funcionario['IDFuncionario']?>">Alterar</a></td>
     
        </tr>
    </tr>
    <?php 
        endforeach;
    ?>
</table>
<?php
    include_once("rodape.php");
?>