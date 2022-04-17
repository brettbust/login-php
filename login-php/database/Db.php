<?php

//host es la direccion de la base de datos localhost para este caso
//dbname es el nombre de la base de datos login-system para este caso
//dbuser es el nombre de usuario de la base de datos "root"
//dbpass es la contraseña de la base de datos ""

class Connection{
 
    public static function connect(){

        try{
            $conn = new PDO("mysql:host=localhost;dbname=login-system", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            return $conn;
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

//$e es un objeto que tiene sus atributos y metodos se puede llamar de otro modo aunque $e es lo mas comun

Connection::connect();

/* php data object (PDO) es una libreria que contiene funciones para trabajar con bases de datos 

Ventajas:

nos permite conectar con diferentes fuentes de datos (oracle, mysql, sql server, etc).

*/