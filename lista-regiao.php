<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('funcionario-database.php');
    include_once("regiao-database.php");

    $conexao = new BancoDeDados();
    $reg = new Regiao($conexao);

    $regioes = $reg->buscaRegioes();

?>

    <table class="table table-striped table-bordered meio">
        <h1 class="meio">LISTA DE REGIÕES</h1>
        <br>
        <thead>
            <th class="meio">IDRegiao</th>
            <th class="meio">DescricaoRegiao</th>
            <th class="meio" colspan="2">Editar</th>
        </thead>
        <tbody>
            <?php foreach ($regioes as $regiao): ?>
                <tr>
                    <td><?=$regiao['IDRegiao']?></td>
                    <td><?=$regiao['DescricaoRegiao']?></td>
                    <td><a href="remover-regiao.php?ID=<?=$regiao['IDRegiao']?>">Remover</a></td>
                    <td><a href="altera-regiao-form.php?ID=<?=$regiao['IDRegiao']?>">Alterar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


<?php
    include_once("rodape.php");
?>