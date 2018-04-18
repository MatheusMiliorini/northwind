<?php

    class BancoDeDados {

        private $con;

        public function __construct($host,$user,$pass,$db) {
            $this->con = mysqli_connect($host,$user,$pass,$db);
        }

        public function getCon() {
            return $this->con;
        }
    } 
?>