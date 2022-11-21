<?php

    class Login{
        //Si no pones protected el te crearia los atributos que se llaman igual que las columnas
        protected $usu = null;//Se debe llamar igual que la columna
        protected $password = null;

        /*
            1- Preparar la consola -> prepare
            2- Establecer el modo de recuperacion: FETCH_CLASS,FETCH_ASSOC
            3- Ejecutar la consulta -> execute
            4- Recuperar lo registros : fetch(un registro)/ fetchALL(devuelve todos los registros)

        */


        public static function all(){
            $dsn = "mysql:dbname=demo;host=db";
            $usuario = "dbuser";
            $password= "secret";

            try {
                $db = new PDO($dsn, $usuario , $password);
                //Establece el nivel de error que muestra en la conexion
                $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                //Esscrivimos la sentencia
                $sql = "SELECT * FROM credenciales";
                $sentencia = $db -> prepare($sql);
                //Sentencia de recuperacion
                $sentencia -> setFetchMode(PDO::FETCH_CLASS,"Login");
                //ejecutar
                $sentencia -> execute();
                //Recuperar los reguistos
                /*
                while($obj = $sentencia -> fetch()){
                    echo "<br> NOMBRE : " . $obj -> $nombreUsu;
                    echo "<br> CONTRASEÑA : " . $obj -> $password;

                }//fin While
                */
                $credenciales  = $sentencia -> fetchAll(PDO::FETCH_CLASS,"Login");//Todos los registros
                foreach($credenciales as $credencial){
                    echo "<br> NOMBRE : " . $credencial->usu;
                    echo "<br> CONTRASEÑA : " . $credencial->password;
                }

            } catch (PDOException $e) {
                echo "<br> Error Conexoin : " . $e -> getMessage();
            }

        }//fin all

    }//fin clase

    echo "<h2> Recuperando registros</h2>";
    Login::all();
