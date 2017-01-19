<?php

include_once 'config.php';

function conectaDb() {
    
    try {
        
       $conexionBDA=new PDO('mysql:host='.Config::$bdhostname.';dbname='.Config::$bdnombre.'',Config::$bdusuario,Config::$bdclave); 
            
            $conexionBDA->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            $conexionBDA->exec("SET CHARACTER SET UTF8");
        
    } catch (PDOException $ex) {
        
        $ex->getCode();
        $ex->getMessage();
        
        

    }
    
    return $conexionBDA;
    
    
    
    
}

$conex=  conectaDb();

print_r($conex);

$consulta="select * from marca";
$resultado=$conex->query($consulta);

if(!$resultado) {
    echo "Error en la consulta";
} else {
    foreach($resultado as $valor) {
        print "<p>$valor[id] , $valor[marca]";
    }
}
