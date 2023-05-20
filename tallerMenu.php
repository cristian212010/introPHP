<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tallerMenu.php" method="post">
        <h2>MENU</h2>
        <label for="">1. Lectura de datos</label><br>
        <label for="">2. Crear Array Asociativo</label><br>
        <label for="">3. Mostrar Array Asociativo</label><br>
        <label for="">4. Eliminar primer elemento del Array</label><br>
        <label for="">5. Eliminar el ultimo elemento del array</label><br>
        <label for="">6. Eliminar cualquier elemento del Array</label><br>
        <label for="">7. Agregar elemento al comienzo del Array</label><br>
        <label for="">8. Agregar elemento al final del Array</label><br>
        <label for="">9. Crear Array con objetos</label><br>
        <label for="">10. Iterar Array con FOR</label><br>
        <label for="">11. Iterar Array con ForEach</label><br>
        <label for="">12. Iterar objetos con Map y crear copia</label><br>
        <label for="">13. Proceso personal</label><br>
        <label for="">0. Salir</label><br>
        <label>Ingrese la opcion deseada: </label>
        <input type="text" name="opcion">
        <input type="submit" value="enviar">
    </form>
</body>
</html>
<?php
    session_start();
    if ($_POST) {
        $option = $_POST["opcion"];
        if (isset($_POST["nombreCamper"]) && isset($_POST["edadCamper"])) {
            $nombre = $_POST["nombreCamper"];
            $edad = $_POST["edadCamper"];
            $_SESSION["arrayAsociativo"][$nombre] = $edad;
        }
        if (isset($_POST["eliminarNombre"])) {
            $nombreEliminar =  $_POST["eliminarNombre"];
            unset($_SESSION["arrayAsociativo"][$nombreEliminar]);
            echo "Se ha eliminado el elemento de el array: <pre>" . print_r($_SESSION["arrayAsociativo"], true) . "</pre>";
        }
        if (isset($_POST["agregarNombre"]) && isset($_POST["agregarValor"])) {
            $nombre = $_POST["agregarNombre"];
            $valor = $_POST["agregarValor"];
            array_unshift($_SESSION["arrayAsociativo"][$nombre] =  $valor);
        }
        switch ($option) {
            case '1':
                break;
            case '2':
                echo "
                <h3>2. Creando Array Asociativo</h3>
                <form action='tallerMenu.php' method='post'>
                    <label>Ingrese el nombre de el camper: <label><br>
                    <input type='text' name='nombreCamper'><br>
                    <label>Ingrese la edad de el camper: <label><br>
                    <input type='text' name='edadCamper'>
                    <input type='submit' value='enviar'>
                </form>
                ";
                break;
            case '3':
                if (isset($_SESSION["arrayAsociativo"]) && !empty($_SESSION["arrayAsociativo"])) {
                    echo "Array asociativo previamente creado: <pre>" . print_r($_SESSION["arrayAsociativo"], true) . "</pre>";
                } else {
                    echo "El array asociativo no ha sido creado aún.";
                }
                break;
            case '4':
                if (isset($_SESSION["arrayAsociativo"]) && !empty($_SESSION["arrayAsociativo"])) {
                    array_shift($_SESSION["arrayAsociativo"]);
                    echo "Se ha eliminado el primer elemento de el array: <pre>" . print_r($_SESSION["arrayAsociativo"], true) . "</pre>";
                } else {
                    echo "El array asociativo no ha sido creado aún.";
                }
                break;
            case '5':
                if (isset($_SESSION["arrayAsociativo"]) && !empty($_SESSION["arrayAsociativo"])) {
                    array_pop($_SESSION["arrayAsociativo"]);
                    echo "Se ha eliminado el ultimo elemento de el array: <pre>" . print_r($_SESSION["arrayAsociativo"], true) . "</pre>";
                } else {
                    echo "El array asociativo no ha sido creado aún.";
                }
                break;
            case '6':
                if (isset($_SESSION["arrayAsociativo"]) && !empty($_SESSION["arrayAsociativo"])) {
                    echo "<br> 
                    <form action='tallerMenu.php' method='post'>
                    <label>Ingrese el nombre de el elemento que desea eliminar</label>
                    <input type='text' name='eliminarNombre'>
                    <input type='submit' value='enviar'>
                    </form>";

                } else {
                    echo "El array asociativo no ha sido creado aún.";
                }
                break;
            case '7':
                if (isset($_SESSION["arrayAsociativo"]) && !empty($_SESSION["arrayAsociativo"])) {
                    echo " <br>  
                    <form action='tallerMenu.php' method='post'>
                    <label>Ingrese el nombre de el elemento que desea agregar</label>
                    <input type='text' name='agregarNombre'><br>
                    <label>Ingrese el valor de el elemento que desea agregar</label>
                    <input type='text' name='agregarValor'>
                    <input type='submit' value='enviar'>
                    </form>";

                } else {
                    echo "El array asociativo no ha sido creado aún.";
                }
                break;
            default:
                # code...
                break;
        }
    }
?>