<?php
    namespace Dwes\Galaxias\Pegaso;
    

    const RADIO = 0.75;//Millones de años luz
    
    function observar($mensaje){
        echo "<br> Estoy DIRIGIENDOME a la galaxia" . $mensaje;
    }

    class Galaxia{

        function __construct(){
            $this->nacimiento();
        }

        function nacimiento(){
            echo "<br> Soy una galaxia NUEVA";
        }

        static function muerte(){
            echo "<br> Estoy Destruido!!";
        }

    }