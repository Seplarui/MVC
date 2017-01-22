<?php


$usuario="alumno";
$password="alumno";

$db=new PDO("mysql:host=localhost;",$usuario,$password);



//CREO LA BASE DE DATOS

IF($db->query("create database seplarui
default character set utf8
default collate utf8_general_ci;")) {
    
    echo "<p>Creada BBDD: seplarui</p>";
} else {
    $db->errorCode();
    $db->errorInfo();
}

//CREO LAS TABLAS DE LA BASE DE DATOS

if($db->query("create table seplarui.marca(id int(5) not null auto_increment,
marca varchar(255),
PRIMARY KEY(id)) DEFAULT CHARSET=utf8 engine=innodb;")) {
    echo "<p>Creada tabla: MARCA</p>";
} else {
    print_r($db->errorCode());
    print_r($db->errorInfo());
}

if ($db->query("create table seplarui.modelo(idmodelo int(5) not null auto_increment,
modelo varchar(255),
motor varchar(255),
idmarca int(5),
PRIMARY KEY(idmodelo),
CONSTRAINT FK_MARCA FOREIGN KEY(idmarca) REFERENCES seplarui.marca(id)) DEFAULT CHARSET=utf8 engine=innodb"))

{
    echo "Creada tabla: MODELO";
} else {

    print_r($db->errorCode());
    print_r($db->errorInfo());
}


$db->errorInfo();
$db->errorCode();
?>

<html>
    <meta charset="utf8">
    <head><title>Gestión de Vehículos</title></head>
    
    <body>
        <div align="center">
            
            <a href="index.php">Inicio</a>
        
        
        </div>
        
    </body>
    
    
</html>