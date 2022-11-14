<?php
    require "../Product.php";

    class ProductController{
        function __construct(){
            echo "<br> Contructor clase ProductController";
        }//Fin constructor

        function index(){
            //echo "<br> Dentro de index de ProductController";
            //Metodo home de Controller de mvc00
            $products = Product::all();
            require_once "../views/home.php";
        }//fin index

        function show(){
            //echo "<br> Dentro de show de ProductController";
            //Metodo show de Controller de mvc00
            $id = $_GET["id"];
            $product = Product::find($id);//Vendra de start.php

            require_once "../views/show.php";
        }//mi show

    }//fin clase