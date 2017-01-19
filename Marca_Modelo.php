<?php

//error_reporting(0);

class Marca_Modelo {
    
    private $bd;
    private $marca_vehiculo;
    
    public function __construct() {
        
        $this->bd=Conectar_BDA::conexion();
        $this->marca_vehiculo=array();
        
    }
    
        function getMarca_vehiculo() {
            
            $consulta=$this->bd->query("select * from marca");
            
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
                
                $this->marca_vehiculo[]=$filas;
            }
            
            return $this->marca_vehiculo;
            
            
            
    }

    
    function setMarca_vehiculo($marca_vehiculo) {
        
        $consulta="insert into marca values($marca_vehiculo)";
        
        
        $this->marca_vehiculo = $marca_vehiculo;
    }

    
    
    
}