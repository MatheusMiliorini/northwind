<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-database.php");

    $conexao = new BancoDeDados();
    $fun = new Funcionario($conexao);

    $sucesso = $fun->updateFuncionario($_POST['IDFuncionario'],$_POST['sobrenome'],$_POST['nome'],$_POST['titulo'],$_POST['titulocortesia'],$_POST['datanascimento'],$_POST['dataadmissao'],$_POST['endereco'],$_POST['endereco'],$_POST['regiao'],$_POST['cep'],$_POST['pais'],$_POST['telefoneresidencial'],$_POST['extensao'],$_POST['notas'],$_POST['reportase']);

    if ($sucesso) {
        header('Location:index.php');
    } else {
        echo "Erro: " . mysqli_error($conexao->getCon());
    }
?>

<?php
    include_once("rodape.php");
?>