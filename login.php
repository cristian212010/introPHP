<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <label>User</label>
        <input type="text" name="user">
        <label>Password</label>
        <input type="password" name="password">
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php 
    if ($_POST) {
        $validacion=false;
        if ($_POST["user"]=="admin" && $_POST["password"] == "admin") {
            $url = "http://localhost/introPHP/taller.php";
            header("Location: $url");
            $validacion=true;
            exit;
        }
        if (!$validacion==true) {
            echo "usuario o contraseña incorrecto";
        }
    }
?>