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
    <tr>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>Titulo</td>
        <td>Titulo Cortesia</td>
        <td>Nacimento</td>
        <td>Admissão</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Região</td>
        <td>CEP</td>
        <td>País</td>
        <td>Telefone Residencial</td>
        <td>Extensão</td>
        <td>Notas</td>
        <td>Reportase à</td>
    </tr>
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
     
        </tr>
    </tr>
    <?php 
        endforeach;
    ?>
</table>
<?php
    include_once("rodape.php");
?>