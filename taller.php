<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="taller.php" method="post">
        <h2>1</h2>
        <label for="">Nota 1</label>
        <input type="number" name="nota1">
        <label for="">Nota 2</label>
        <input type="number" name="nota2">
        <label for="">Nota 3</label>
        <input type="number" name="nota3">
        <input type="submit" value="enviar">
    </form>
    <form action="taller.php" method="post">
        <h2>2</h2>
        <label>Ingrese un numero: </label>
        <input type="number" name="numeroParImpar">
        <input type="submit" value="enviar">
    </form>
    <form action="taller.php" method="post">
        <h2>3</h2>
        <label>Ingrese la resistencia: </label>
        <input type="number" name="resistencia">
        <label>Ingrese la intensidad de corriente: </label>
        <input type="number" name="intensidadC">
        <input type="submit" value="enviar">
    </form>
    <form action="taller.php" method="post">
        <h2>4</h2>
        <label>Ingrese el nombre de la persona 1: </label>
        <input type="text" name="nombre1">
        <label>Ingrese la edad de la persona 1: </label>
        <input type="number" name="edad1"><br>
        <label>Ingrese el nombre de la persona 2: </label>
        <input type="text" name="nombre2">
        <label>Ingrese la edad de la persona 2: </label>
        <input type="number" name="edad2"><br>
        <label>Ingrese el nombre de la persona 3: </label>
        <input type="text" name="nombre3">
        <label>Ingrese la edad de la persona 3: </label>
        <input type="number" name="edad3">
        <input type="submit" value="enviar">
    </form>
    <form action="taller.php" method="post">
        <h2>5</h2>
        <label >Ingrese un numero 1:</label>
        <input type="number" name="numeroI1">
        <label >Ingrese el numero 2:</label>
        <input type="number" name="numeroI2">
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php 
    if ($_POST) {
/*         $promedio = ( $_POST["nota1"] + $_POST["nota2"] + $_POST["nota3"] ) / 3 ;
        if ($promedio >= 3.9) {
            echo "Becado";
        }else {
            echo "Estudie";
        }   */
/*         if ($_POST["numeroParImpar"]%2==0) {
            echo "El numero {$_POST["numeroParImpar"]} es par";
            if ($_POST["numeroParImpar"]>10) {
                echo " y es mayor a 10";
            }
        }else{
            echo "El numero {$_POST["numeroParImpar"]} es impar";
            if ($_POST["numeroParImpar"]>10) {
                echo " y es mayor a 10";
            }
        } */
/*         $voltaje = $_POST["resistencia"] * $_POST["intensidadC"];
        echo "El voltaje es {$voltaje}"; */
/*         if ($_POST){
            if($_POST["edad1"]>$_POST["edad2"] && $_POST["edad1"]>$_POST["edad3"]){
                echo "{$_POST["nombre1"]} es el mayor";
            }else {
                if ($_POST["edad2"]>$_POST["edad3"]) {
                    echo "{$_POST["nombre2"]} es el mayor";
                }else{
                    echo "{$_POST["nombre3"]} es el mayor";
                }
            }
        } */
/*         $numeroUno = $_POST["numeroI1"];
        $numeroDos = $_POST["numeroI2"];
        if ($numeroUno>$numeroDos) {
            $suma = $numeroUno+$numeroDos;
            echo "suma de los dos numeros es {$suma}";
            $resta = $numeroUno-$numeroDos;
            echo "La diferencia de los dos numeros es {$resta}";
        }else{
            $multiplicacion = $numeroUno*$numeroDos;
            echo "El producto de los dos numeros es {$multiplicacion}";
            $divicion = $numeroUno/$numeroDos;
            echo " La divicion de los dos numeros es {$divicion}";
        } */
    }
?>