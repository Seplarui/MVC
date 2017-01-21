<?php

require_once 'ModeloV_Modelo.php';
$modelo_vehiculo=new ModeloV_Modelo();
$resultado_modelo= $modelo_vehiculo->getModelo_vehiculo();

print_r($resultado_modelo);










?>