<?php

require_once 'configuracion.php';

$base_datos_PDO= new PDO("mysql:host=$servidor;dbname=$base_datos",$usuario,$pass);

$sql="insert into usuarios(id, nombre, apellidos, cuenta)values(:id ,:nombre,:apellidos,:cuenta)";

$sentencia=$base_datos_PDO->prepare($sql);
$sentencia->bindValue(":id", 17);
$sentencia->bindValue(":nombre", 'Carlos');
$sentencia->bindValue(":apellidos", "Álvarez");

$sentencia->bindValue(":cuenta", 3342);
$sentencia->execute();

echo "El último id es ". $base_datos_PDO->lastInsertId();

?>