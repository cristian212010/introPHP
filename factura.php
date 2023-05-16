<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="factura.php" method="POST">
        <label for="">Cryptomonedas</label>
        <select name="crypto" id="">
            <option value="BTC">BTC</option>
            <option value="ETH">ETH</option>
            <option value="DOGE">DOGE</option>
        </select>
        <label for="">Cantidad</label>
        <input type="number" name="cantidad">
        <label for="">Precio:</label>
        <input type="number" name="precio">
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php 
    if ($_POST) {
        echo "{$_POST["crypto"]} <br>";
        echo "{$_POST["cantidad"]} <br>";
        echo "{$_POST["precio"]}";
        $total = $_POST["cantidad"] * $_POST["precio"];
        echo "Total: {$total}";
    }
?>