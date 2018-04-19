<?php
    class Regiao {

        private $conexao;

        function __construct($conexao) {
            $this->conexao = $conexao->getCon();
        }

        function addRegiao($nome) {
            $sql = "INSERT INTO regiao(DescricaoRegiao) VALUES('$nome')";
            return mysqli_query($this->conexao,$sql);
        }

        function listaRegioes() {
            $regioes = array();

            $sql = "SELECT * FROM regiao";
            $query = mysqli_query($this->conexao,$sql);

            while($row = mysqli_fetch_assoc($query)) {
                array_push($regioes,$row);
            }

            return $regioes;
        }
    }
?>