<?php
class Producto{
    private $nombre;
    private $cantidad;
    private $precio;
    private $proveedor;
    private $marca;
    private $categoria;
    private $peso;

    public function __constructor($nombre, $cantidad, $precio, $proveedor, $marca, $categoria, $peso){
        $this-> nombre = $nombre;
        $this-> cantidad = $cantidad;
        $this-> precio = $precio;
        $this-> proveedor = $proveedor;
        $this-> marca = $marca;
        $this-> categoria = $categoria;
        $this-> peso = $peso;
    }

    public function getNombre(){
        return $this -> nombre;
    }
    public function getCantidad(){
        return $this -> cantidad;
    }
    public function getPrecio(){
        return $this -> precio;
    }
    public function getProveedor(){
        return $this -> proveedor;
    }
    public function getMarca(){
        return $this -> marca;
    }
    public function getCategoria(){
        return $this -> categoria;
    }
    public function getPeso(){
        return $this -> peso;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setCantidad($cantidad){
        $this->cantidad=$cantidad;
    }
    public function setPrecio($precio){
        $this->precio=$precio;
    }
    public function setProveedor($proveedor){
        $this->proveedor=$proveedor;
    }
    public function setMarca($marca){
        $this->marca=$marca;
    }
    public function setCategoria($categoria){
        $this->categoria=$categoria;
    }
    public function setPeso($peso){
        $this->peso=$peso;
    }
}

echo "<h3>Producto 1</h3>";
$producto1 = new Producto();
$producto1 -> setNombre("televisor");
$producto1 -> setCantidad(25);
$producto1 -> setPrecio(250000);
$producto1 -> setProveedor("Jumbo");
$producto1 -> setMarca("SONY");
$producto1 -> setCategoria("hogar");
$producto1 -> setPeso(8);
echo $producto1 -> getNombre(). "<br>";
echo $producto1 -> getCantidad(). "<br>";
echo $producto1 -> getPrecio(). "<br>";
echo $producto1 -> getProveedor(). "<br>";
echo $producto1 -> getMarca(). "<br>";
echo $producto1 -> getCategoria(). "<br>";
echo $producto1 -> getPeso(). "<br>";

echo "<h3>Producto 2</h3>";
$producto2 = new Producto();
$producto2 -> setNombre("tenis");
$producto2 -> setCantidad(40);
$producto2 -> setPrecio(500000);
$producto2 -> setProveedor("Alkosto");
$producto2 -> setMarca("Adidas");
$producto2 -> setCategoria("zapatos");
$producto2 -> setPeso(1);
echo $producto2 -> getNombre(). "<br>";
echo $producto2 -> getCantidad(). "<br>";
echo $producto2 -> getPrecio(). "<br>";
echo $producto2 -> getProveedor(). "<br>";
echo $producto2 -> getMarca(). "<br>";
echo $producto2 -> getCategoria(). "<br>";
echo $producto2 -> getPeso(). "<br>";

echo "<h3>Producto 3</h3>";
$producto3 = new Producto();
$producto3 -> setNombre("gafas");
$producto3 -> setCantidad(60);
$producto3 -> setPrecio(20000);
$producto3 -> setProveedor("Falabella");
$producto3 -> setMarca("Raiban");
$producto3 -> setCategoria("rostro");
$producto3 -> setPeso(0.5);
echo $producto3 -> getNombre(). "<br>";
echo $producto3 -> getCantidad(). "<br>";
echo $producto3 -> getPrecio(). "<br>";
echo $producto3 -> getProveedor(). "<br>";
echo $producto3 -> getMarca(). "<br>";
echo $producto3 -> getCategoria(). "<br>";
echo $producto3 -> getPeso(). "<br>";

echo "<h3>Producto 4</h3>";
$producto4 = new Producto();
$producto4 -> setNombre("camiseta");
$producto4 -> setCantidad(200);
$producto4 -> setPrecio(40000);
$producto4 -> setProveedor("Cañaveral");
$producto4 -> setMarca("Nike");
$producto4 -> setCategoria("cuerpo");
$producto4 -> setPeso(1);
echo $producto4 -> getNombre(). "<br>";
echo $producto4 -> getCantidad(). "<br>";
echo $producto4 -> getPrecio(). "<br>";
echo $producto4 -> getProveedor(). "<br>";
echo $producto4 -> getMarca(). "<br>";
echo $producto4 -> getCategoria(). "<br>";
echo $producto4 -> getPeso(). "<br>";
?>