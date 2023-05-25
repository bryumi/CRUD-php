<?php
    require_once('./genero.php');
    class serie{
            private $nomeSerie;
            private $id;
            private $anoIni;
            private $anoFim;
            private $temporadas;
            private $atores;
            private $sinopse;
            private $nota;
            private $id_genero;

            public function __construct(){
                $this-> id_genero= new genero();
            }
            
            public function getNome(){
                return $this -> nomeSerie;
            }
            public function getId(){
                return $this -> id;
            }
            public function getAnoIni(){
                return $this -> anoIni;
            }
            public function getAnoFim(){
                return $this -> anoFim;
            }
            public function getTemporadas(){
                return $this -> temporadas;
            }
            public function getAtores(){
                return $this-> atores;
            }
            public function getSinopse(){
                return $this-> sinopse;
            }
            public function getNota(){
                return $this-> nota;
            }
            public function setNome($nomeSerie){
                $this->nomeSerie = $nomeSerie;
            }
            public function setAnoIni($anoIni){
                $this->anoIni=$anoIni;
            }
            public function setAnoFim($anoFim){
                $this->anoFim=$anoFim;
            }
            public function setTemporadas($temporadas){
                $this->temporadas=$temporadas;
            }
            public function setAtores($atores){
                $this->atores=$atores;
            }
            public function setSinopse($sinopse){
                $this->sinopse=$sinopse;
            }
            public function setNota($nota){
                $this->nota=$nota;
            }

    }
