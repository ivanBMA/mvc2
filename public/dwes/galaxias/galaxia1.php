<?php
    namespace Dwes\Galaxias;


    const RADIO = 1.25;//Millones de años luz
    
    function observar($mensaje){
        echo "<br> Estoy mirando a la galaxia" . $mensaje;
    }

    class Galaxia{

        function __construct(){
            $this->nacimiento();
        }

        function nacimiento(){
            echo "<br> Soy una nueva galaxia";
        }

        function __toString(){
            return "Esto son galaxias superiores";
        }

        static function muerte(){
            echo "<br> Me destuyo!!";
        }

    }