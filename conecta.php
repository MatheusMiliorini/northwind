<?php

    class BancoDeDados {

        private $con;

        public function __construct() {
            $this->con = mysqli_connect("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
        }

        public function getCon() {
            return $this->con;
        }
    } 
?>