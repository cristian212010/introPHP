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
    class Objeto {
        public $atributo1;
        public $atributo2;
            
        public function __construct($atributo1, $atributo2) {
            $this->atributo1 = $atributo1;
            $this->atributo2 = $atributo2;
        }
    }
    session_start();
    if ($_POST) {
        if (isset($_POST["opcion"])) {
            $option = $_POST["opcion"];
        }else {
            $option = 0;
        }
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
            $arrayAsociativo = $_SESSION["arrayAsociativo"];
            $nuevoArray = array($nombre => $valor) + $arrayAsociativo;
            $_SESSION["arrayAsociativo"] = $nuevoArray;
        }
        if (isset($_POST["finalNombre"]) && isset($_POST["finalValor"])) {
            $nombre = $_POST["finalNombre"];
            $valor = $_POST["finalValor"];
            $_SESSION["arrayAsociativo"][$nombre] = $valor;
        }
        if (isset($_POST["atributoUno"]) && isset($_POST["atributoDos"])) {
            $atributoUno = $_POST["atributoUno"];
            $atributoDos = $_POST["atributoDos"];
            $objeto = new Objeto($atributoUno, $atributoDos);
            if (isset($_SESSION["arrayObjetos"])) {
                $arrayObjetos = $_SESSION["arrayObjetos"];
            } else {
                $arrayObjetos = array();
            }
            $arrayObjetos[] = $objeto;
            $_SESSION["arrayObjetos"] = $arrayObjetos;
        }
        if (isset($_POST["nombreUsuario"])) {
            $nombreUsuario = $_POST["nombreUsuario"];
            echo "<br> Bienvenido $nombreUsuario";
        }
        switch ($option) {
            case '1':
                echo "    
                <form action='tallerMenu.php' method='post'>
                <label for=''>Ingrese su nombre: </label>
                <input type='text' name='nombreUsuario'>
                <input type='submit' value='enviar'>
                </form>";
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
                    <label>Ingrese el nombre de el elemento que desea agregar al inicio</label>
                    <input type='text' name='agregarNombre'><br>
                    <label>Ingrese el valor de el elemento que desea agregar al inicio</label>
                    <input type='text' name='agregarValor'>
                    <input type='submit' value='enviar'>
                    </form>";

                } else {
                    echo "El array asociativo no ha sido creado aún.";
                }
                break;
            case '8':
                if (isset($_SESSION["arrayAsociativo"]) && !empty($_SESSION["arrayAsociativo"])) {
                    echo " <br>  
                    <form action='tallerMenu.php' method='post'>
                    <label>Ingrese el nombre de el elemento que desea agregar al final</label>
                    <input type='text' name='finalNombre'><br>
                    <label>Ingrese el valor de el elemento que desea agregar al final</label>
                    <input type='text' name='finalValor'>
                    <input type='submit' value='enviar'>
                    </form>";

                } else {
                    echo "El array asociativo no ha sido creado aún.";
                }
                break;
            case '9':
                echo "
                <h3>2. Creando Array con objetos</h3>
                <form action='tallerMenu.php' method='post'>
                    <label>Ingrese el primer atributo del objeto: <label><br>
                    <input type='text' name='atributoUno'><br>
                    <label>Ingrese el segundo atributo del objeto: <label><br>
                    <input type='text' name='atributoDos'>
                    <input type='submit' value='enviar'>
                </form>
                ";
                break;
            case '10':
                for ($i = 0; $i < count($_SESSION["arrayObjetos"]); $i++) {
                    $objetoActual = $_SESSION["arrayObjetos"][$i];
                    $propiedad1 = $objetoActual->atributo1;
                    $propiedad2 = $objetoActual->atributo2;

                    echo "Objeto $i - Propiedad 1: $propiedad1, Propiedad 2: $propiedad2";
                }
                break;
            case '11':
                $arrayObjetos = $_SESSION["arrayObjetos"];
                foreach ($arrayObjetos as $objeto) {
                    $atributo1 = $objeto->atributo1;
                    $atributo2 = $objeto->atributo2;
                
                    echo "Atributo 1: $atributo1, Atributo 2: $atributo2";
                }
                break;
            case '12':
                $atributos = array_map(function($objeto) {
                    return $objeto->atributo1 . ' - ' . $objeto->atributo2;
                }, $_SESSION["arrayObjetos"]);
                print_r($atributos);
                break;
            case '13':
                echo "Array de objetos: <pre>" . print_r($_SESSION["arrayObjetos"], true) . "</pre>";
                break;
            default:
                if ($option>13) {
                    echo "Opcion no valida";
                }
                break;
        }
    }
?>