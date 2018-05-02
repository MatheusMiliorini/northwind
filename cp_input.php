<?php
    class CpInput {
        private $texto;
        private $tipo;
        private $nome;

        public function __construct($nome,$tipo,$texto) {
            $this->texto = $texto;
            $this->tipo = $tipo;
            $this->nome = $nome;
        }

        public function render() {
            $html = "<label for=\"$this->nome\">$this->texto</label>
            <input type=\"$this->tipo\" name=\"$this->nome\" id=\"$this->nome\" class=\"form-control\">";
            return $html;
        }
    }
?>