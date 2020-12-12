<?php
    class IMC {
        private $altura;
        private $peso;
        private $imc;
        private $situacao;

        public function __construct() {
            $this->peso = 0;
            $this->altura = 0;
            $this->situacao = '';
        }

        public function setAltura($altura) {
            $this->altura = $altura;
        }
        public function getAltura() {
            return $this->altura;
        }

        public function setPeso($peso) {
            $this->peso = $peso;
        }
        public function getPeso() {
            return $this->peso;
        }

        public function setImc($imc) {
            $this->imc = $imc;
        }
        public function getImc() {
            return $this->imc;
        }

        /* ---------------------------------------------------- */

        public function calcular() {
            if($this->getAltura() != 0 && $this->getPeso() !=0 && $this->getAltura() >= 0 && $this->getPeso() >= 0) {
                $this->setImc($this->getPeso() / ($this->getAltura() * $this->getAltura()));
            } else {
                $this->setAltura(0);
                $this->setImc(0);
                $this->setPeso(0);
            }
            $this->situacao();
        }
        private function situacao() {
            if($this->getImc() == 0) {
                $this->situacao = '<p style="color: red">Resultado inválido</p>';
            }
            elseif ($this->imc < 17) {
                $this->situacao = '<p style="color: #ff2600;">Muito abaixo do peso</p>';
            } elseif (($this->imc >= 17) && ($this->imc <= 18.49)) {
                $this->situacao = '<p style="color: orange;">Abaixo do peso</p>';
            } elseif (($this->imc >= 18.5) && ($this->imc <= 24.99)) {
                $this->situacao = '<p style="color: green">Peso normal</p>';
            } else if (($this->imc >= 25) && ($this->imc <= 29.99)) {
                $this->situacao = '<p style="color: orange";>Acima do peso</p>';
            } elseif (($this->imc >= 30) && ($this->imc <= 34.99)) {
                $this->situacao = '<p style="color: #ffae00";>Obesidade I [LEVE]</p>';
            } elseif (($this->imc >= 35) && ($this->imc <= 39.99)) {
                $this->situacao = '<p style="color: #ff5100";>Obesidade II [SEVERA]</p>';
            } elseif ($this->imc >= 40) {
                $this->situacao = '<p style="color: rgb(255,0,0)";>Obesidade III [MÓRBIDA]</p>';
            }
            $this->exibirDetalhes();
        }
        
        private function exibirDetalhes() {
            echo 'Altura: '.$this->getAltura().'m<br>';
            echo 'Peso: '.$this->getPeso().'Kg<br>';
            echo 'IMC: '.round($this->getImc(),2).'<br>';
            echo 'Situação: '.$this->situacao;
        }
    }
?>