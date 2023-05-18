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
        <label for="">2. Crear Objeto</label><br>
        <label for="">3. Mostrar Objeto</label><br>
        <label for="">4. Crear Array</label><br>
        <label for="">5. Mostrar Array</label><br>
        <label for="">6. Eliminar primer elemento del Array</label><br>
        <label for="">7. Eliminar el ultimo elemento del array</label><br>
        <label for="">8. Eliminar cualquier elemento del Array</label><br>
        <label for="">9. Agregar elemento al comienzo del Array</label><br>
        <label for="">10. Agregar elemento al final del Array</label><br>
        <label for="">11. Crear Array con objetos</label><br>
        <label for="">12. Iterar Array con FOR</label><br>
        <label for="">13. Iterar Array con ForEach</label><br>
        <label for="">14. Iterar objetos con Map y crear copia</label><br>
        <label for="">15. Proceso personal</label><br>
        <label for="">0. Salir</label><br>
        <label>Ingrese la opcion deseada: </label>
        <input type="text" name="opcion">
        <input type="submit" value="enviar">
    </form>
</body>
</html>
<?php
    if ($_POST) {
        session_start();
        $option = $_POST["opcion"];
        switch ($option) {
            case '1':
                break;
            case '2':
                $arrayAsociativo = crearArrayAsociativo();
                break;
            case '3':
                print_r($arrayAsociativo);
                break;
            case '4':
                # code...
                break;
            case '5':
                # code...
                break;
            default:
                # code...
                break;
        }
    }
    function crearArrayAsociativo(){
        echo "<br>
        <h3>2. Creando Array Asociativo</h3>
        <form action='tallerMenu.php' method='post'>
            <label>Ingrese el nombre de el camper: <label><br>
            <input type='text' name='nombreCamper'><br>
            <label>Ingrese la edad de el camper: <label><br>
            <input type='text' name='edadCamper'>
            <input type='submit' value='enviar'>
        </form>
        ";
        $nombre = $_POST["nombreCamper"];
        $edad = $_POST["edadCamper"];
        $campers = array(
            $nombre => $edad
        );
        $campers[$nombre]=$edad
        print_r($campers);
        return $campers;
    }
?>