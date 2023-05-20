<?php

class Persona 
{
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre, $apellido, $email, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }
}

class Empleado extends Persona {

    protected $codigo;
    protected $departamento;
    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }

    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . " Email: " . $this->email; 
    }
}

class Proveedor extends Persona {

    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->empresa = $empresa;
    }

    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . " Email: " . $this->email; 
    }
}

$empleado = new Empleado('Sebastian Daniel', 'campos',  'sebastian@campus.com', 202342424, 03, 'software');
$proveedor = new Proveedor('Josue', 'Perez', 'josue@campuslands.com',3345345, "Amazon");

var_dump($empleado); 
echo "<br>";
echo "<br>";
var_dump($proveedor);
echo "<br>";
echo "<br>";

$empleado->mostrarInformacion(); 
echo "<br>";
echo "<br>";
$proveedor->mostrarInformacion();
?>