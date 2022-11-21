<?php

    namespace Core;//No poner nada encima ni comentarios

    /*
        -Si no la url no especifica ningun controlador (recurso) => asigno
        uno por defecto => home
        -Si no la url no especifica ninguno metodo => asigno por defecto: index
    */
    echo "<br> hola App";
    class App{
        function __construct(){
            
            //http://mvc.local/product/show => http://mvc.local/index.php?url=product/show
            
            if(isset($_GET["url"]) && !empty($_GET["url"])){
                $url = $_GET["url"];
            }else{
                $url = "home";
            }
            // /product/show -> product: recurso; show: accion; 5: parametro
            $arguments = explode("/", trim($url, "/"));
            $controllerName = array_shift($arguments);//Product ; ProductController
            $controllerName = ucwords($controllerName) . "Controller";
            
            if(count($arguments) > 0){//<----------------)-___-
                $method = array_shift($arguments);//Show
            }else{
                $method = "index";
            }


            //Voy a cargar el controlador. ProductController.php
            $file = "../app/controllers/$controllerName" . ".php";
            if(file_exists($file)){
                require_once $file;//importo el fichero si existe
            }else{
                http_response_code(404);
                die("No encontrado");
            }

            //Exite el metodo en el controlador ?
            $controllerName = "\\app\controllers\$controllerName";
            $controllerObject = new $controllerName();//Objeto de la clase
            if(method_exists($controllerObject,$method)){
                $controllerObject->$method($arguments);//metodo ok -> lo invoco.
            }else{
                http_response_code(404);
                die("No encontrado");
            }




        }//fin_contruct

    }//fin_app