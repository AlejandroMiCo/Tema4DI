<?php


class Libro
{
    private $autor;
    private $titulo;
    private $paginas;
    private $refLibro;
    private $prestado;
    private $contieneCD;

    public function getAutor()
    {
        return $this->autor;
    }

    
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getPaginas()
    {
        return $this->paginas;
    }
    
    public function setRefLibro($refLibro)
    {
        if (strlen($refLibro) > 3) {
            # code...
            $this->refLibro = $refLibro;
        }else{
            echo "Error, el valor de la referencia debe ser superior a 3 caracteres";
        }
    }
    public function setPrestado(){
        $this->prestado++;
    }

    public function getPrestado() {
        return $this->prestado;
    }

    public function printAutor()
    {
        echo "$this->autor";
    }
    public function printTitulo()
    {
        echo "$this->titulo";
    }

    public function setContieneCd($contieneCD){
        $this->contieneCD = $contieneCD;
    }

    public function printLibro()
    {
        echo "El autor del libro es: $this->autor";
        echo "El titulo del libro es: $this->titulo";
        echo "El numero de paginas del libro es: $this->paginas";

        if (strlen($this->refLibro) > 0) {
            echo "La referencia del libreo es: $this->refLibro";
        }
        echo "El libro ha sido prestado un total de $this->prestado veces";
    }

    public function __construct()
    {
        $this->refLibro = "";
        $this->contieneCD = false;
    }

}
?>