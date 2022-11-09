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