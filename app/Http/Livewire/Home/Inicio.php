<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
class Inicio extends Component
{
    public $articulos=[];
    public $listaCompras=[];
    public $total;
    protected $listeners = ['agregarProducto','eliminarArticulo','eliminarArticuloCarro','vaciarCarro'];
    public function mount(){

        $this->articulos[0]["nombre"]="sanitario";
        $this->articulos[0]["precio"]=20000;
        $this->articulos[0]["imagen"]="";
        $this->articulos[0]["descripcion"]="sanitario multiusos";
        $this->articulos[0]["cantidad"]=0;

        if(Session::has('carrito')){
            $this->listaCompras=Session::get('carrito'); 
        }
    }
    public function render()
    {
        foreach ( $this->listaCompras as $key => $articulo) {
            $this->total=$this->total+$articulo["precio"];
        }
        return view('livewire.home.inicio');
    }
    public function pagarArticulos(){
        dd($this->articulos);
        // $this->dispatchBrowserEvent('cerrarModal'); 
    }
    public function agregarProducto($articulo){
       array_push($this->listaCompras,$articulo);
       Session::put('carrito',$this->listaCompras);
       $this->emit('agrecarArticulo',$articulo);
    }
    public function eliminarArticulo($articulo){
        array_splice($this->listaCompras,$articulo,1);
        Session::put('carrito',$this->listaCompras);
        $this->emit('eliminarArticuloCarrito',$articulo);
    }
    public function eliminarArticuloCarro($articulo){
        array_splice($this->listaCompras,$articulo,1);
        Session::put('carrito',$this->listaCompras);
    }
    public function vaciarCarro(){
        $this->listaCompras=[];
        Session::put('carrito',$this->listaCompras);
    }
   
}
