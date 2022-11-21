<?php

    $dsn = "mysql:dbname=demo;host=db";
    $usuario = "dbuser";
    $password= "secret";

    /*
        1-  Preparar la consulta -> prepare
        2-  Vincular las variables -> bindParam o bindValue
        3-  Ejecutar las sentencias -> execute();
    */

    try {
        $db = new PDO($dsn, $usuario, $password);
        //Establece el nivel de error que muestra en la conexion
        $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        //Preparacion por nombre
        //$sentencia = $db -> prepare("INSERT INTO credenciales (usu,password)    VALUES (:nombre,:clave)");
        
        //Preparacion por posicion
        $sentencia = $db -> prepare("INSERT INTO credenciales (usu,password)    VALUES (?, ?)");


        $nombre = "ivan";
        $clave1 = "2742";

        //bindParam por posicion
        $sentencia -> bindParam(1,$nombre);
        $sentencia -> bindParam(2, $clave1);

        /* bindParam por nombre
        $sentencia -> bindParam(":nombre",$nombre);
        $sentencia -> bindParam(":clave" , $clave1);
        */
        /* bindValue por nombre
        $sentencia -> bindValue(":nombre",$nombre);
        $sentencia -> bindValue(":clave" , $clave1);
        */

        /*
        $nombre = "Pedro";
        $clave1 = "789";
        */
        //Ejecutar
        $sentencia -> execute();

        echo "<h2> Exito </h2>";

    } catch (PDOException $e) {
        echo "Error producido al conectar: " . $e -> getMessage();
    }