<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-database.php");

    $conexao = new BancoDeDados();
    $ter = new Territorio($conexao);

    $sucesso = $ter->updateTerritorio($_POST['id'],$_POST['nome'],$_POST['regiao']);

    if ($sucesso) {
        header('Location:index.php');
    } else {
        echo "Erro: " . mysqli_error($conexao->getCon());
    }
?>

<?php
    include_once("rodape.php");
?>