<?php

    class Menu{
        private $links = array();
        private $titles = array();

        public function cargarOpcion($enlace, $titulo) {
            $this->links[] = $enlace;
            $this->titles[] = $titulo;
        }

        public function mostrar(){
            for ($i=0; $i < count($this->links); $i++) { 
                echo "<a href=\"{$this->links[$i]}\">{$this->titles[$i]}</a><br>";
            }
        }
    }


    $enlaces = new Menu();

    $enlaces->cargarOpcion("http://www.colegiovivas.com","ColegioVivas");
    $enlaces->cargarOpcion("http://www.marca.es","Diariomarca");


    $enlaces->mostrar();
?>