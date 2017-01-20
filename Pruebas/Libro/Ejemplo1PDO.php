<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf8">
        <title>Ejemplo 1 con PDO</title>
    </head>
    
    <?php
    
  
        
    require_once 'Configuracion.php';
    
    $base_datos_PDO=new PDO("mysql:host=$servidor;dbname=$base_datos;charset=utf8",$usuario,$pass);
        
    $resultado= $base_datos_PDO->query("select * from usuarios");
    
    /*foreach ($resultado as $row) {
        
        echo $row['nombre']. " ".$row['apellidos']." "."<br/>";
        
    }*/
    
    echo "WHILE<BR/>";
    
    while($fila=$resultado->fetch(PDO::FETCH_ASSOC)) {
        echo $fila['id']." ".$fila['nombre']. " ".$fila['apellidos']."<br/>";
        
        //print_r($fila);
    }
    
    print_r($fila);
    ?>
    
</html>

