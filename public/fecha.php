<?php

    public  function __construct(){
        $this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate);
    }

    //Horas
    echo "<br> La hora es : " . time();

    echo "<br> La hora en un mes : " . strtotime("+1 month");
    echo "<hr>";
    //fechas date . DateTime
    echo "<br> La fecha es : " . date("d/F/y");

    $fecha = new DateTime("now");
    var_dump($fecha);

    echo "<hr>";

    $fecha = new DateTime("+11 weeks");
    var_dump($fecha);
    echo "<br> Intento de fecha : " . $fecha->format("d@M@Y");

    echo "<hr>";

    $mifecha = DateTime::createFromFormat("d/m/Y" , "12/10/2018");
    var_dump($mifecha);
    echo "<br><b> Fecha en español : " . $mifecha->format("d@M@Y") . "</b>";

    