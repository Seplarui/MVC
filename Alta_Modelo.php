<!DOCTYPE html>

<html lang="es">


    <head>

        <meta charset="utf-8">
        <title>Alta Modelo Vehículo</title>
    </head>

    <body>

        <?php
        require_once "Marca_Modelo.php";

        $var = new Marca_Modelo();
        $mat = $var->getMarca_Vehiculo();
        ?>

        <div align="center">

            <h1>Datos del Modelo</h1>
            <hr>

            <p>Alta Modelo de Vehículo</p>

            <table border="1">

                <form action="Alta_Modelo.php" method="post">

                    <tr><td>Modelo:</td><td><input type="text" name="modelo"></td></tr>
                    <tr><td>Motor:</td><td><input type="text" name="motor"></td></tr>
                    <tr><td>Marca:</td><td>

                            <?php
                            $nombre = "marcas";
                            $vector_marcas = $mat;
                            /* echo "<pre>Vector Marcas";
                              print_r($vector_marcas);
                              echo "</pre>"; */
                            $opciones = lista_marcas($nombre, $vector_marcas);

                            echo $opciones;

//FUNCION QUE RECOGE LOS DATOS DE LOS VEHÍCULOS Y LOS MUESTRA EN UN COMBOBOX

                            function lista_marcas($nombre, $marcas) {
                                $vector_marcas = $marcas;
                                $longitud_vector = count($vector_marcas);
                                $txt = "<select name='$nombre' id='$nombre'>";
                                for ($i = 0; $i < $longitud_vector; $i++) {
                                    //if ($i % 2 != 0) {

                                    $txt.="<option value='$i'>" . $vector_marcas[$i]['marca'] . '</option>';
                                    //}
                                }
                                $txt.='</select>';
                                return $txt;
                            }
                            ?>                         
                        </td></tr>
                    </select></td></tr>

                    <tr><td><input type="submit" name="enviar" value="Enviar"></td>
                        <td><input type="reset" name="borrar" value="Borrar"></td></tr>

                    <?php
                    include_once 'config.php';
                    include_once 'ModeloV_Modelo.php';
                    $idmarca = $_REQUEST['marcas'];
                    $var = $vector_marcas[$idmarca];
                    $id_marca = $var['id'];
                    print_r($id_marca);

                    $insertar = new ModeloV_Modelo();

                    if (($_REQUEST['modelo'] != "") && ($_REQUEST['motor'] != "")) {

                        $tmp_modelo = (isset($_REQUEST['modelo'])) ? strip_tags(trim(htmlspecialchars($_REQUEST['modelo'], ENT_QUOTES, "ISO-8859-1"))) : "";
                        $modelo_form = str_replace(" ", "", (trim($tmp_modelo)));
                        $tmp_motor = (isset($_REQUEST['motor'])) ? strip_tags(trim(htmlspecialchars($_REQUEST['motor'], ENT_QUOTES, "ISO-8859-1"))) : "";
                        $motor_form = str_replace(" ", "", (trim($tmp_motor)));
                        $insertar->setModelo_vehiculo($modelo_form, $motor_form, $id_marca);
                    } else if ($_REQUEST['modelo'] == "") {

                        echo "<p>Introduce un modelo por favor.</p>";
                    } else if ($_REQUEST['motor'] == "") {

                        echo "<p>Introduce el motor por favor</p>";
                    }
                    //$idmarca = $_REQUEST['marcas'];
                    print_r($modelo_form);
                    print_r($motor_form);
                    //$var = $vector_marcas[$idmarca];
                    //$id_marca = $var['id']+1;
                    //print_r($vector_marcas[$idmarca]);
                    //print_r($kk);

                    echo "<pre>";
                    echo "$idmarca";
                    echo "</pre>";

                    /*  $idid=$kk['id'];
                      print_r($idid); */
                    ?>




                </form>

            </table>

    </body>

</html>