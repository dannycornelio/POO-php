<?php
// definicion de clase producto
class Producto{
    // definicion de atributos
    public $precio;
    public $nombre;
    public $disponible;

// metodo constructor
public function __construct(int $precio = 500, string $nombre = "mesa", bool $disponible = false){
     $this-> precio = $precio;
     $this-> nombre ;
     $this-> disponible;
}


    // definicion de metodos

    public function mostrarNombreProducto() : void{
        echo $this->nombre. "<br>";
    }

    public function mostrarPrecioProducto() : void{
        echo $this->precio. "<br>";
    }

    public function mostrarDisponibleProducto() : void{
        echo $this->disponible. "<br>";
    }
    
}

// creacion de objetos

$mesa = new Producto(); 

$mesa->nombre = "Mesa";
$mesa->precio = 500;
$mesa->disponible = "Si";

$silla = new Producto(); 

$silla->nombre = "Silla grande";
$silla->precio = 200;
$silla->disponible = "No";



echo "<pre>";
var_dump($mesa);
echo "</pre>";
echo "<pre>";
var_dump($silla);
echo "</pre>";

$mesa->mostrarNombreProducto();
$mesa->mostrarPrecioProducto();
$mesa->mostrarDisponibleProducto();
echo "<br>";
$silla->mostrarNombreProducto();
$silla->mostrarPrecioProducto();
$silla->mostrarDisponibleProducto();



?>