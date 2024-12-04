<?php

    //ejemplo de uso de un trait----> Herencia multiple

    trait Saludar{
        function decirHola(){
            return "hola";
        }
    }
    trait Despedir{
        function decirAdios(){
            return "Adios muy buenas";
        }
    }

    class Comunicacion{
        use Saludar,Despedir;
    }

    $comunicacion = new Comunicacion();
    echo $comunicacion->decirHola()." que tal y ".$comunicacion->decirAdios();













?>