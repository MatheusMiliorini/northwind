<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-database.php");

    $conexao = new BancoDeDados();
    $fun = new Funcionario($conexao);

    $sucesso = $fun->removeFuncionario($_GET['ID']);

    if ($sucesso) {
        header('Location:index.php');
    } else {
        echo "Erro: " . mysqli_error($conexao->getCon());
    }
?>

<?php
    include_once("rodape.php");
?>