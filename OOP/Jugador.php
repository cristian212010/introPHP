<?php
class Jugador
{
    private static $goles = 5;
    public static function info() //static es para indicar que se puede utilizar sin instanciar el objeto de la clase
    {
        return self::$goles; //para que funcion el atributo tambien debe estar en static y no se utiliza this sino (self::)
    }
}
/* $jugador = new Jugador();
echo $jugador->info(); */
echo Jugador::info();
?>