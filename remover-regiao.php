<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("regiao-database.php");

    $conexao = new BancoDeDados();
    $reg = new Regiao($conexao);

    $sucesso = $reg->removeRegiao($_GET['ID']);

    if ($sucesso) {
        header('Location:index.php');
    } else {
        echo "Erro: " . mysqli_error($conexao->getCon());
    }
?>

<?php
    include_once("rodape.php");
?>