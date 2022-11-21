<?php
    class Product{
        const PRODUCTS = [
          array(1,'cortacesped'),
          array(2,'Pizarra'),
          array(3,'Billar'),
          array(4,'Dardos'),
        ];

        function __construct(){
            //Contructor vaio
        }
        //Devuelve todos los productos
        public static function all(){
        return Product::PRODUCTS;
        }
        
        //Devolcer un producto en particular
        public static function find($id){
          return Product::PRODUCTS[$id-1];
        }

    

    }//fin clase

  namespace Core;

    class Model{
       protected static function db(){
        $dsn = "mysql:dbname=demo;host=db";
        $usuario = "dbuser";
        $password= "secret";
            try {
              $db = new PDO($dsn, $usuario, $password);
              //Establece el nivel de error que muestra en la conexion
              $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                echo 'Falló la conexión: ' . $e-> getMessage();
            }
            return $db;
        }
    }

