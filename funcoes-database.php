<?php
    function inserirFuncionario($conexao,$nome,$sobrenome,$titulo,$titulocortesia,$datanascimento,$dataadmissao,$endereco,$cidade,$regiao,$cep,$pais,$telefoneresidencial,$extensao,$notas,$reportase) {
        $sql = "INSERT INTO `funcionarios`(`Sobrenome`, `Nome`, `Titulo`, `TituloCortesia`, `DataNac`, `DataAdmissao`, `Endereco`, `Cidade`, `Regiao`, `Cep`, `Pais`, `TelefoneResidencial`, `Extensao`, `Notas`, `Reportase`) VALUES ('$sobrenome','$nome','$titulo','$titulocortesia','$datanascimento','$dataadmissao','$endereco','$cidade','$regiao','$cep','$pais','$telefoneresidencial','$extensao','$notas','$reportase')";
        $query = mysqli_query($conexao,$sql);

        return $query;
    }

    function buscarFuncionarios($conexao) {
        $funcionarios = array();
        
        $sql = "SELECT Nome,Sobrenome,IDFuncionario FROM funcionarios ORDER BY Nome ASC";
        $query = mysqli_query($conexao,$sql);

        while ($row = mysqli_fetch_assoc($query)) {
            array_push($funcionarios,$row);
        }

        return $funcionarios;
        
    }
?>