<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-database.php");

    $conexao = new BancoDeDados();
    $ter = new Territorio($conexao);

    $territorios = $ter->buscaTerritorios();
?>

    <table class="table table-striped table-bordered meio">
        <h1 class="meio">LISTA DE TERRITÓRIOS</h1>
        <br>
        <thead>
            <th class="meio">IDTerritorio</th>
            <th class="meio">DescricaoTerritorio</th>
            <th class="meio">IDRegiao</th>
            <th class="meio" colspan="2">Editar</th>
        </thead>
        <tbody>
            <?php foreach ($territorios as $territorio): ?>
                <tr>
                    <td><?=$territorio['IDTerritorio']?></td>
                    <td><?=$territorio['DescricaoTerritorio']?></td>
                    <td><?=$territorio['IDRegiao']?></td>
                    <td><a href="remover-territorio.php?ID=<?=$territorio['IDTerritorio']?>">Remover</a></td>
                    <td><a href="altera-territorio-form.php?ID=<?=$territorio['IDTerritorio']?>">Alterar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php
    include_once("rodape.php");
?>