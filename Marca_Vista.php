<!DOCTYPE HTML>

<html>
    
    <head>
    <meta charset="utf-8">
    <title>Marca Vista</title>
    
    <style type="text/css">
        
        td {
            border:1px dotted #FF0000;
        }
    </style>
    
    </head>
    
    <body>
        
        <div align="center">
            
            <h1 align="center">Gestión de Marcas de coches </h1>
            <hr>
            <ul><li><a href="Alta_Vehiculo.php">Alta Vehículo</a></li></ul>
            <table border="1">
                
                <tr><td>ID</td><td>MARCA</td></tr>
            
            <?php
            
            include_once 'config.php';
            include_once 'Marca_Controlador.php';
            
            foreach ($resultado as $resul) {
                echo "<tr><td>".$resul['id']."<td>" .$resul['marca']."</td></tr>";
            }
            
            //print_r($resultado);
         
            
            
            
            ?>
          </table>
        </div>
    </body>
</html>