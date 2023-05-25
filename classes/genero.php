<?php
        class genero{
            private $nomeGenero;
            private $id_genero;
            
            public function getNomeGenero(){
                return $this -> nomeGenero;
            }
            public function getIdGenero(){
                return $this -> id_genero;
            }
            public function setNomeGenero($nomeGenero){
                $this->nomeGenero = $nomeGenero;
            }
            public function setIdGenero($id_genero){
                $this->id_genero = $id_genero;
            }
        }
?>