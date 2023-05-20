<?php
abstract class Banco //abstract no deja instanciar el objeto pero si permite heredar de esta clase
{
    public $nombre = "Bancolombia";


    public function getNombre()
    {
        return $this->nombre;
    }
}

/* $banco = new Banco();
echo $banco->getNombre(); */

class Sucursal extends Banco
{
    public $direccion = "Calle 48 # 32 - 76";

    public function getDireccion(){
        return $this->direccion;
    }
}

$sucursal = new Sucursal();
echo $sucursal->getNombre(). "<br>";
echo $sucursal->getDireccion();
?>