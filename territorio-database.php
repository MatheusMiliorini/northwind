<?php
    class Territorio {
        
        private $conexao;

        public function __construct($conexao) {
            $this->conexao = $conexao->getCon();
        }

        public function addTerritorio($id,$nome,$regiao) {
            $sql = "INSERT INTO territorios(IDTerritorio,DescricaoTerritorio,IDRegiao) VALUES('$id','$nome','$regiao')";
            return mysqli_query($this->conexao,$sql);
        }

        function buscaTerritorios() {
            $territorios = array();

            $sql = "SELECT * FROM territorios ORDER BY DescricaoTerritorio ASC";
            $query = mysqli_query($this->conexao,$sql);

            while($row = mysqli_fetch_assoc($query)) {
                array_push($territorios,$row);
            }

            return $territorios;
        }

        function listaTerritorios($territorios) {
            foreach ($territorios as $territorio) {
                echo "<option value=\"{$territorio['IDTerritorio']}\">{$territorio['DescricaoTerritorio']}</option>";
            }
        }

        function removeTerritorio($IDTerritorio) {
            $sql = "DELETE FROM territorios WHERE IDTerritorio='$IDTerritorio'";
            return mysqli_query($this->conexao,$sql);
        }

        function updateTerritorio($IDTerritorio,$DescricaoTerritorio,$IDRegiao) {
            $sql = "UPDATE territorios SET DescricaoTerritorio='$DescricaoTerritorio',IDRegiao='$IDRegiao' WHERE IDTerritorio='$IDTerritorio'";
            return mysqli_query($this->conexao,$sql);
        }
    }
?>