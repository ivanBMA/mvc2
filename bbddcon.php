<?php
         $dsn ="mysql:dbname=demo;host=db";
         $usuario = "dbuser";
         $clave = "secret";

        
    try{
       $bd = new PDO($dsn, $usuario, $clave);
    }catch(){

    }

 