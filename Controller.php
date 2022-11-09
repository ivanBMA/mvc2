<?php
    
    require_once "Product.php";

    class Controller{
        function _contruct(){
            //Vacio
        }
        /*
        Funcion que:
         -recorre todos los productos
         -llama a vista de inventario
        */
        public function home(){
            $products = Product::all();
            require "views/home.php";
        }
        
        //funtion que:
        // -recuperar un producto en particular, el id como parametro
        // --llamar una vista de un producto en concreto.

        public function show(){
            $id = $_GET["id"];
            $product = Product::find($id);
            require "views/show.php";
        }

    }