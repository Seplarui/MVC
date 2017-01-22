<!DOCTYPE HTML>

<html lang="es">
    
    
    <head>
        
        <title>Modelo Vista</title>
        <meta charset="utf-8">
        
        <style type="text/css">
            
            td {
                border:1px dotted #FF0000;
            }
            
            
        </style>
        
    </head>
    
    <body>
        
        <div align="center">
            
            <h1 align="center">Gestión de Modelos de Vehículos</h1>
            <hr>
            <ul><li><a href="Alta_Modelo.php">Alta Modelo</a></li></ul>
            
            <?php
            
            //error_reportin(0);
            
            include_once 'config.php';
            include_once 'ModeloV_Controlador';
            
            print_r($resultado_modelo);
            
            
            
            ?>
            
            
        </div>
        
        
    </body>
        
    
    
    
    
    
    
</html>
