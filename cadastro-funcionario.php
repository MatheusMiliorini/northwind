<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('funcionario-database.php');

    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $func = new Funcionario($conexao);

    $sucesso = $func->inserirFuncionario($_POST['nome'],$_POST['sobrenome'],$_POST['titulo'],$_POST['titulocortesia'],$_POST['datanascimento'],$_POST['dataadmissao'],$_POST['endereco'],$_POST['cidade'],$_POST['regiao'],$_POST['cep'],$_POST['pais'],$_POST['telefoneresidencial'],$_POST['extensao'],$_POST['notas'],$_POST['reportase']);
    
    if (!$sucesso) {
        echo(mysqli_error($conexao->getCon()));
    } else {
        header('Location:index.php');
    }
?>
<?php
    include_once('rodape.php');
?>