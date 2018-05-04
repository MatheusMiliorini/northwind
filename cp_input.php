<?php
    class CpInput {
        private $texto;
        private $tipo;
        private $nome;
        private $value;

        public function __construct($nome,$tipo,$texto,$value = '') {
            $this->texto = $texto;
            $this->tipo = $tipo;
            $this->nome = $nome;
            $this->value = $value;
        }

        public function render() {
            $html = "<label for=\"$this->nome\">$this->texto</label>
            <input type=\"$this->tipo\" name=\"$this->nome\" id=\"$this->nome\" class=\"form-control\" value=\"$this->value\">";
            return $html;
        }
    }
?>