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
    <form action="taller.php" method="post">
        <h2>6</h2>
        <label>Nombre: </label>
        <input type="text" name="nombreEstudiante1">
        <label>Sexo: </label>
        <input type="text" name="sexo1">
        <label>Nota definitiva: </label>
        <input type="number" name="nota1"> <br>
        <label>Nombre: </label>
        <input type="text" name="nombreEstudiante2">
        <label>Sexo: </label>
        <input type="text" name="sexo2">
        <label>Nota definitiva: </label>
        <input type="number" name="nota2"> <br>
        <label>Nombre: </label>
        <input type="text" name="nombreEstudiante3">
        <label>Sexo: </label>
        <input type="text" name="sexo3">
        <label>Nota definitiva: </label>
        <input type="number" name="nota3"> <br>
        <input type="submit" value="enviar">
    </form>
    <form action="taller.php" method="post">
        <h2>7</h2>
        <label>Nombre articulo: </label>
        <input type="text" name="nombreArticulo">
        <label>Precio articulo: </label>
        <input type="number" name="precioArticulo">
        <label>Cantidad articulo: </label>
        <input type="number" name="cantidadArticulo">
        <input type="submit" value="enviar">
    </form>
    <form action="taller.php" method="post">
        <h2>8</h2>
        <label>Valor de un lado de el cuadrado: </label>
        <input type="number" name="ladoCuadrado">
        <label>Ingrese altura de el rectangulo: </label>
        <input type="number" name="alturaRectangulo">
        <label>Ingrese la base de el rectangulo: </label>
        <input type="number" name="baseRectangulo">
        <input type="submit" value="enviar">
    </form>
    <form action="taller.php" method="post">
        <h2>9</h2>
        <label>Nombre atleta: </label>
        <input type="text" name="nombreAtleta1">
        <label>Marca atleta: </label>
        <input type="number" name="marcaAtleta1"><br>
        <label>Nombre atleta: </label>
        <input type="text" name="nombreAtleta2">
        <label>Marca atleta: </label>
        <input type="number" name="marcaAtleta2"><br>
        <label>Nombre atleta: </label>
        <input type="text" name="nombreAtleta3">
        <label>Marca atleta: </label>
        <input type="number" name="marcaAtleta3">
        <input type="submit" value="enviar">
    </form>
    <form action="taller.php" method="post">
        <h2>10</h2>
        <label>Ingrese el primer numero: </label>
        <input type="number" name="primerNumero">
        <label>Ingrese el segundo numero: </label>
        <input type="number" name="segundoNumero">
        <label>Ingrese el tercer numero: </label>
        <input type="number" name="tercerNumero">
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php 
    if ($_POST) {
        //punto 1
/*         $promedio = ( $_POST["nota1"] + $_POST["nota2"] + $_POST["nota3"] ) / 3 ;
        if ($promedio >= 3.9) {
            echo "Becado";
        }else {
            echo "Estudie";
        }   */

        //punto 2
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

        //punto 3
/*         $voltaje = $_POST["resistencia"] * $_POST["intensidadC"];
        echo "El voltaje es {$voltaje}"; */

        //punto 4
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
        
        //punto 5
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

        //punto 6
/*         $hombres = 0;
        $mujeres = 0;
        $nombreMayor;
        $nombreMenor;
        if ($_POST["nota1"]>$_POST["nota2"] && $_POST["nota1"]>$_POST["nota3"]) {
            $nombreMayor = $_POST["nombreEstudiante1"];
            $mayorNota = $_POST["nota1"];
            if ($_POST["nota2"]>$_POST["nota3"]) {
                $nombreMenor = $_POST["nombreEstudiante3"];
            }else{
                $nombreMenor = $_POST["nombreEstudiante2"];
            }
        }else if ($_POST["nota2"]>$_POST["nota1"] && $_POST["nota2"]>$_POST["nota3"]) {
            $nombreMayor = $_POST["nombreEstudiante2"];
            $mayorNota = $_POST["nota2"];
            if ($_POST["nota1"]>$_POST["nota3"]) {
                $nombreMenor = $_POST["nombreEstudiante3"];
            }else{
                $nombreMenor = $_POST["nombreEstudiante1"];
            }
        }else {
            $nombreMayor = $_POST["nombreEstudiante3"];
            $mayorNota = $_POST["nota3"];
            if ($_POST["nota2"]>$_POST["nota1"]) {
                $nombreMenor = $_POST["nombreEstudiante1"];
            }else{
                $nombreMenor = $_POST["nombreEstudiante2"];
            }
        }
        if ($_POST["sexo1"]=="hombre") {
            $hombres++;
        }else{
            $mujeres++;
        }
        if ($_POST["sexo2"]=="hombre") {
            $hombres++;
        }else{
            $mujeres++;
        }
        if ($_POST["sexo3"]=="hombre") {
            $hombres++;
        }else{
            $mujeres++;
        }
        echo "El estudiante con mayor nota es {$nombreMayor} <br>";
        echo "El estudiante con menor nota es {$nombreMenor} <br>";
        echo "La cantidad de hombres es {$hombres} <br>";
        echo "La cantidad de mujeres es {$mujeres} <br>"; */


        //punto 7
/*         $precioTotal = $_POST["precioArticulo"]*$_POST["cantidadArticulo"];
        echo "El nombre del articulo es {$_POST["nombreArticulo"]} <br>";
        echo "El precio del articulo es {$_POST["precioArticulo"]} <br>";
        echo "La cantidad de articulos es {$_POST["cantidadArticulo"]} <br>";
        echo "El precio total de los articulos {$precioTotal}"; */

        //punto 8
/*         $perimetro = $_POST["ladoCuadrado"]*4;
        $area = $_POST["alturaRectangulo"]*$_POST["baseRectangulo"];
        echo "El perimetro de el cuadrado es {$perimetro} <br>";
        echo "El area de el rectangulo es {$area}"; */

        //punto 9
/*         $record = 15.50;
        $marcaMayor;
        $nombreMayor;
        if ($_POST["marcaAtleta1"]>$_POST["marcaAtleta2"] && $_POST["marcaAtleta1"]>$_POST["marcaAtleta3"]) {
            $nombreMayor = $_POST["nombreAtleta1"];
            $marcaMayor = $_POST["marcaAtleta1"];
        }else if ($_POST["marcaAtleta2"]>$_POST["marcaAtleta1"] && $_POST["marcaAtleta2"]>$_POST["marcaAtleta3"]) {
            $nombreMayor = $_POST["nombreAtleta2"];
            $marcaMayor = $_POST["marcaAtleta2"];
        }else {
            $nombreMayor = $_POST["nombreAtleta3"];
            $marcaMayor = $_POST["marcaAtleta3"];
        }
        if ($marcaMayor>$record) {
            echo "Rompio el record con una marca de {$marcaMayor} metros";
        }
        echo " la atleta ganadora es {$nombreMayor} y gano 500 millones"; */

        //punto 10
        $numeroMayor;
        $numeroMenor;
        $primerNumero = $_POST["primerNumero"];
        $segundoNumero = $_POST["segundoNumero"];
        $tercerNumero = $_POST["tercerNumero"];
        $sumaNumeros = $primerNumero+$segundoNumero+$tercerNumero;
        $promedioNumeros = $sumaNumeros/3;
        if ($primerNumero>$segundoNumero && $primerNumero>$tercerNumero) {
            $numeroMayor = $primerNumero;
            if ($segundoNumero>$tercerNumero) {
                $numeroMenor = $tercerNumero;
            }else{
                $numeroMenor = $segundoNumero;
            }
        }else if ($segundoNumero>$primerNumero && $segundoNumero>$tercerNumero) {
            $numeroMayor = $segundoNumero;
            if ($primerNumero>$tercerNumero) {
                $numeroMenor = $tercerNumero;
            }else{
                $numeroMenor = $primerNumero;
            }
        }else {
            $numeroMayor = $tercerNumero;
            if ($segundoNumero>$primerNumero) {
                $numeroMenor = $primerNumero;
            }else{
                $numeroMenor = $segundoNumero;
            }
        }
        echo "La sumatoria de los valores es {$sumaNumeros} <br>";
        echo "El promedio de los numeros es {$promedioNumeros} <br>";
        echo "Fueron 3 valores <br>";
        echo "El mayor valor es {$numeroMayor} <br>";
        echo "El menor valor es {$numeroMenor}";

    }
?>