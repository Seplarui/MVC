<?php

include_once 'config.php';

class Conectar_BDA {
    
    public static function conexion() {
        
        try{
            
            $conexionBDA=new PDO('mysql:host='.Config::$bdhostname.';dbname='.Config::$bdnombre.'',Config::$bdusuario,Config::$bdclave);
            
            $conexionBDA->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            $conexionBDA->exec("SET CHARACTER SET UTF8");
            
            
        } catch (Exception $ex) {
            
            echo "Error ". $ex->getMessage();

        }
        return $conexionBDA;
    }
    
}

