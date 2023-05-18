<?php
class Camper
{
    //1. Declaracion de propiedades con modificadores de acceso
    private $nombre;
    private $email;
    private $celular;
    //2. Metodo constructor (metodo magico)
    //Alternativamente puedo inicializar con valores parametrizados al constructor
    public function __construct($nombre, $email, $celular)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->celular = $celular;
    }
    //3. Metodos (getters and Setters)
        //get -> se obtienen valores de propiedades
        public function getNombre()
        {
            return $this->nombre;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getCelular()
        {
            return $this->celular;
        }
        //metodos con parametros
        public function getSaludo($saludo)
        {
            return $saludo . " campus";
        }
        //set´-> se modifican . setean valores de atributos - propiedades
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }
        public function setCelular($celular)
        {
            $this->celular = $celular;
        }

}

//Instanciar clases --> variables de instancia
$camper = new Camper('Cristian', 'cristian@gmail.com', 3014563726);
$camper->setNombre('Camilo');
$camper->setEmail('camilo@gmail.com');
$camper->setCelular(3027456738);
echo $camper->getNombre() . "<br>";
echo $camper->getEmail(). "<br>";
echo $camper->getCelular(). "<br>";
echo $camper->getSaludo('Buenas'). "<br>";

?>
