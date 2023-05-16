<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //1- Aritmeticst Operators
    // + - * / ** %
    $x = 20;
    $y = 3;
    $z = null;

    /* $z = $x + $y; */
    /* $z = $x - $y; */
    /* $z = $x * $y; */
    /* $z = $x / $y; */
    /* $z = $x ** $y; */
    /* $z = $x % $y; */

    echo $z;

    //2- Increment /Decrement Operators
    //++ --
    $counter = 10;

    /* $counter = $counter + 1; */
    /* $counter++; */
    /* $counter--; */

    // En 2 o mas valores

    $counter -= 4;

    echo $counter;

    //3- Jerarquia - precedence
    //1. ()
    //2. **
    //3. * / %
    //4. + -

    $total = 4 + 6 * 2;
    echo "<br> {$total}";
    ?>
</body>
</html>