<?php

namespace App\Http\Livewire\Productos;

use Livewire\Component;

class Productos extends Component
{  
    public $articulos=[];
    public function mount(){
    $this->articulos[0]["nombre"]="LAVAMANOS Y MUEBLE";
    $this->articulos[0]["precio"]=250;
    $this->articulos[0]["imagen"]="3.jpg";
    $this->articulos[0]["descripcion"]="El mueble es el complemento ideal que le brindará a tu baño el toque de
    calidez, elegancia y funcionalidad.
    Te proponemos diversidad";
    $this->articulos[0]["cantidad"]=0;

    $this->articulos[1]["nombre"]="LAVAMANOS Y MUEBLE";
    $this->articulos[1]["precio"]=300;
    $this->articulos[1]["imagen"]="1.jpg";
    $this->articulos[1]["descripcion"]="Sanitarios CORONA y AMERICAN STANDARD son el equilibrio perfecto entre diseño, sobriedad y elegancia.";
    $this->articulos[1]["cantidad"]=0;

    $this->articulos[2]["nombre"]="SANITARIO BLANCO";
    $this->articulos[2]["precio"]=20000;
    $this->articulos[2]["imagen"]="2.jpg";
    $this->articulos[2]["descripcion"]="Sanitarios CORONA y AMERICAN STANDARD son el equilibrio perfecto entre diseño, sobriedad y elegancia.";
    $this->articulos[2]["cantidad"]=0;

    $this->articulos[3]["nombre"]="SANITARIO NEGRO";
    $this->articulos[3]["precio"]=20000;
    $this->articulos[3]["imagen"]="4.jpg";
    $this->articulos[3]["descripcion"]="Sanitarios CORONA y AMERICAN STANDARD son el equilibrio perfecto entre diseño, sobriedad y elegancia.";
    $this->articulos[3]["cantidad"]=0;


    $this->articulos[4]["nombre"]="SUPER BAÑERA";
    $this->articulos[4]["precio"]=20000;
    $this->articulos[4]["imagen"]="5.jpg";
    $this->articulos[4]["descripcion"]="Podrás escoger numerosas opciones de Jacuzzis con tecnología de vanguardia, adaptados a tu espacio y al tipo de utilización deseado.";
    $this->articulos[4]["cantidad"]=0;

    $this->articulos[5]["nombre"]="BAÑERA MEDIANA";
    $this->articulos[5]["precio"]=400000;
    $this->articulos[5]["imagen"]="6.jpg";
    $this->articulos[5]["descripcion"]="Podrás escoger numerosas opciones de Jacuzzis con tecnología de vanguardia, adaptados a tu espacio y al tipo de utilización deseado.";
    $this->articulos[5]["cantidad"]=0;

    $this->articulos[6]["nombre"]="LAVAMANOS Y MUEBLE";
    $this->articulos[6]["precio"]=20000;
    $this->articulos[6]["imagen"]="7.png";
    $this->articulos[6]["descripcion"]="Podrás escoger numerosas opciones de Jacuzzis con tecnología de vanguardia, adaptados a tu espacio y al tipo de utilización deseado.";
    $this->articulos[6]["cantidad"]=0;

    $this->articulos[7]["nombre"]="LAVAMANOS Y MUEBLE";
    $this->articulos[7]["precio"]=20000;
    $this->articulos[7]["imagen"]="8.jpg";
    $this->articulos[7]["descripcion"]="Podrás escoger numerosas opciones de Jacuzzis con tecnología de vanguardia, adaptados a tu espacio y al tipo de utilización deseado.";
    $this->articulos[7]["cantidad"]=0;

    $this->articulos[8]["nombre"]="LAVAMANOS Y MUEBLE";
    $this->articulos[8]["precio"]=20000;
    $this->articulos[8]["imagen"]="9.png    ";
    $this->articulos[8]["descripcion"]="Podrás escoger numerosas opciones de Jacuzzis con tecnología de vanguardia, adaptados a tu espacio y al tipo de utilización deseado.";
    $this->articulos[8]["cantidad"]=0;
}
    public function render()
    {
        return view('livewire.productos.productos');
    }
    public function agregarCarrito($posición){
        $this->emit('agregarProducto', $this->articulos[$posición]);
    }
}
