<?php
    
    class Funcionario {

        private $conexao;

        function __construct($conexao) {
            $this->conexao = $conexao->getCon();
        }

        function inserirFuncionario($nome,$sobrenome,$titulo,$titulocortesia,$datanascimento,$dataadmissao,$endereco,$cidade,$regiao,$cep,$pais,$telefoneresidencial,$extensao,$notas,$reportase,$IDTerritorio) {
            $sql = "INSERT INTO `funcionarios`(`Sobrenome`, `Nome`, `Titulo`, `TituloCortesia`, `DataNac`, `DataAdmissao`, `Endereco`, `Cidade`, `Regiao`, `Cep`, `Pais`, `TelefoneResidencial`, `Extensao`, `Notas`, `Reportase`) VALUES ('$sobrenome','$nome','$titulo','$titulocortesia','$datanascimento','$dataadmissao','$endereco','$cidade','$regiao','$cep','$pais','$telefoneresidencial','$extensao','$notas','$reportase')";
            $query = mysqli_query($this->conexao,$sql);
    
            if ($query) {
                return $this->inserirFuncionarioTerritorio($IDTerritorio);
            }
        }

        private function inserirFuncionarioTerritorio($IDTerritorio) {
            $IDFuncionario = $this->getMaxID();
            $sql = "INSERT INTO funcionarios_territorios(IDFuncionario,IDTerritorio) VALUES('$IDFuncionario','$IDTerritorio')";
            return mysqli_query($this->conexao,$sql);
        }

        private function getMaxID() {
            $res = array();

            $sql = "SELECT MAX(IDFuncionario) AS codigo FROM funcionarios";
            $query = mysqli_query($this->conexao,$sql);

            while ($row = mysqli_fetch_assoc($query)) {
                array_push($res,$row['codigo']);
            }

            return $res[0];
            
        }
    
        function buscarFuncionarios() {
            $funcionarios = array();
            
            $sql = "SELECT Nome,Sobrenome,IDFuncionario FROM funcionarios ORDER BY Nome ASC";
            $query = mysqli_query($this->conexao,$sql);
    
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($funcionarios,$row);
            }
            return $funcionarios;  
        }

        function listaFuncionario() {
            $sql = "SELECT fun.*,fun2.Nome AS reportasea FROM funcionarios fun LEFT JOIN funcionarios fun2 ON fun.Reportase = fun2.IDFuncionario";
            return mysqli_query($this->conexao,$sql);
        }

        function removeFuncionario($IDFuncionario) {
            $sql = "DELETE FROM funcionarios WHERE IDFuncionario='$IDFuncionario'";
            return mysqli_query($this->conexao,$sql);
        }

        function buscarInfoFuncionario($IDFuncionario) {
            $dados = array();  

            $sql = "SELECT * FROM funcionarios WHERE IDFuncionario='$IDFuncionario'";
            $query = mysqli_query($this->conexao,$sql);
            
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($dados,$row);
            }
            return $dados[0];
        }

        function updateFuncionario($IDFuncionario,$Sobrenome,$Nome,$Titulo,$TituloCortesia,$DataNac,$DataAdmissao,$Endereco,$Cidade,$Regiao,$Cep,$Pais,$TelefoneResidencial,$Extensao,$Notas,$Reportase) {
            $sql = "UPDATE `funcionarios` SET `Sobrenome`='$Sobrenome',`Nome`='$Nome',`Titulo`='$Titulo',`TituloCortesia`='$TituloCortesia',`DataNac`='$DataNac',`DataAdmissao`='$DataAdmissao',`Endereco`='$Endereco',`Cidade`='$Cidade',`Regiao`='$Regiao',`Cep`='$Regiao',`Pais`='$Regiao',`TelefoneResidencial`='$TelefoneResidencial',`Extensao`='$Extensao',`Notas`='$Notas',`Reportase`='$Reportase' WHERE IDFuncionario='$IDFuncionario'";

            return mysqli_query($this->conexao,$sql);
        }
    } 
?>