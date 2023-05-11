<?php



class Producto{
    //definicion de atriburos
    public $precio = 2.56;
    public $nombre = "NOmbre";
    public $disponible = true;


    // definicion de metodo

    function mostrarNombreProducto(){
        echo $this->nombre;

    }

    public function mostrarNombreProducto() VOI

}


//creacion de objero

$mesa = new Producto();
$mesa->nombre = "Mesa";
$mesa->precio = 25.00;
$mesa->disponible = false;


echo "<pre>";
var_dump($mesa);
echo "</pre>";





?>