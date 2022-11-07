<?php

require "../bbddcon.php";
    /*
    
    */

    $sql = "select usu, password from credenciales";
    $registros = $bd->query($sql);
    echo "<br> Numero de registros devueltos: " . $registros->rowCount();
    if($registros->rowCount() > 0){
        foreach($registros as $a){
            echo "<br> Nombre de usuario: " . $a["nombreusu"];
            echo "<br> Nombre de password: " . $a["password"];

        }
    }else{
        echo "<br> No se ha devuelto ninguna fila";
    }

    echo "<br> conexion establecida";