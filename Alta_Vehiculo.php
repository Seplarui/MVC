<!DOCTYPE HTML>

<html>
    <head><title>Gestión de Vehículos</title>
        
        <meta charset="utf8">
    </head>
    
    <h1>DATOS DEL VEHÍCULO</h1>
    
    <h2>Alta Marca de Vehículo</h2>
    
    
    <table border="1">
    <form action="Alta_Vehiculo.php" method="post">
        <tr><td>Marca:<input type="text" name="marca"></td></tr>
        <tr><td><input type="submit" name="enviar" value="Enviar"></td>
        <td><input type="reset" name="borrar" value="Borrar"></td></tr>
    </form>
    </table>
    
    <?php
    
    include_once 'config.php';
    include_once 'Marca_Modelo.php';
    
    $marca_vehiculo=$_REQUEST['marca'];
    echo "La marca del vehículo es: ".$marca_vehiculo;
    
    $insertar=new Marca_Modelo();
    
    $insertar->setMarca_Vehiculo($marca_vehiculo);
    
    
    
    
    
    
    
    
    ?>
    
</html>

