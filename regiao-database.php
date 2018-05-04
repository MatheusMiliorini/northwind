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

        function buscaRegioes() {
            $regioes = array();

            $sql = "SELECT * FROM regiao";
            $query = mysqli_query($this->conexao,$sql);

            while($row = mysqli_fetch_assoc($query)) {
                array_push($regioes,$row);
            }

            return $regioes;
        }

        function listaRegioes($regioes) {
            foreach ($regioes as $regiao) {
                echo "<option value=\"{$regiao['IDRegiao']}\">{$regiao['DescricaoRegiao']}</option>";
            }
        }

        function removeRegiao($id) {
            $sql = "DELETE FROM regiao WHERE IDRegiao='$id'";
            return mysqli_query($this->conexao,$sql);
        }

        function updateRegiao($IDRegiao,$nome) {
            $sql = "UPDATE regiao SET DescricaoRegiao='$nome' WHERE IDRegiao='$IDRegiao'";
            return mysqli_query($this->conexao,$sql);
        }
    }
?>