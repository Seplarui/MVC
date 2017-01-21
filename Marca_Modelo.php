<?php

//error_reporting(0);
include_once 'config.php';
include_once 'conectar.php';
class Marca_Modelo {
    
    private $bd;
    private $marca_vehiculo;
    
    public function __construct() {
        
        $this->bd=Conectar_BDA::conexion();
        $this->marca_vehiculo=array();
        
    }
    
        function getMarca_Vehiculo() {
            
            $consulta=$this->bd->query("select * from marca");
            
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
                
                $this->marca_vehiculo[]=$filas;
            }
            
            return $this->marca_vehiculo;
            
            
            
    }

    
    function setMarca_Vehiculo($marca_vehiculo) {
        
        //$consulta="insert into marca values($marca_vehiculo)";
        
        $consulta="insert into marca(marca) values(:marca)";
        
        $sentencia=$this->bd->prepare($consulta);
        $sentencia->bindValue(":marca", $marca_vehiculo);
        $sentencia->execute();
        
        
        
        //$this->marca_vehiculo = $marca_vehiculo;
    }

    
    
    
}