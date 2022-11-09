<?php
    echo "Privado";
    //Recurso/accion/parametro
      //Recurso : controladores
      //Accion: metodos del controladores (controlador->show())
      //Parametros : find -> id de producto.
    require_once "Controller.php";
      $app = new Controller();
      //$controller->home();
      //$controler->show();

      //Recoger el metodo que pasan como parametro y si no
      // esoecifican nigun metodo cargar el metodo home
      if(isset($_GET["method"])){
          $method = $_GET["method"];//Show ,find,create, update...
      }else{
          $method = "home";
      }

      //2 - Verificar que el metodo introducido existe.
      if(method_exists($app, $method)){
          $app->$method();
      }else{
          http_response_code(404);
          die("Metodo no encontrado");//exit
      }



      $app->method;
