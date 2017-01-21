<?php

//error_reporting(0);

include_once 'config.php';
include_once 'conectar.php';


class ModeloV_Modelo {
    
    private $bd;
    private $modelo_vehiculo;
    //private $modelo_motor;
    
    public function __construct() {
        
        $this->bd=Conectar_BDA::conexion();
        //$this->modelo_vehiculo=array();
        /*$this->modelo_vehiculo=$modelo_vehiculo;
        $this->modelo_motor=$modelo_motor;*/
        
    }
    
    
    function getModelo_vehiculo() {
        
        $consulta=$this->bd->query("select * from modelo");
        while($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
            
            $this->modelo_vehiculo[]=$filas;
            
        }
        
                
        return $this->modelo_vehiculo;
    }


    function setModelo_vehiculo($modelo_vehiculo,$motor,$idmarca) {
        
        $consulta="insert into modelo(modelo,motor,idmarca) values(:modelo,:motor,:idmarca)";
        
        $sentencia=$this->bd->prepare($consulta);
        $sentencia->bindValue(":modelo", $modelo_vehiculo);
        $sentencia->bindValue(":motor", $motor);
        $sentencia->bindValue(":idmarca",$idmarca);
        $sentencia->execute();
        
        //$this->modelo_vehiculo = $modelo_vehiculo;
    }


    
    
}








?>
