<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_post.php" method="post"> <!-- en method se puede colocar get si necesito solo leer datos -->
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
        //echo "{$_GET["user"]} <br>"; //si uso el metodo post necesito hacerlo asi
        //echo "{$_GET["password"]}"
        echo "{$_POST["user"]} <br>";
        echo "{$_POST["password"]}";
    }
?>