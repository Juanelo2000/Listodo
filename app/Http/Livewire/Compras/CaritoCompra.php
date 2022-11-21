<?php

namespace App\Http\Livewire\Compras;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
class CaritoCompra extends Component
{
    public $listaCompras=[];
    public $total;
    protected $listeners = ['agrecarArticulo','eliminarArticulo'];
    public function mount(){
        if(Session::has('carrito')){
            $this->listaCompras=Session::get('carrito'); 
        }
    }
    public function render()
    {
        foreach ( $this->listaCompras as $key => $articulo) {
            $this->total=$this->total+$articulo["precio"];
        }
        return view('livewire.compras.carito-compra');
    }
    public function agrecarArticulo($articulo){
        array_push($this->listaCompras,$articulo);
        Session::put('carrito',$this->listaCompras);
    }
    public function eliminarArticulo($articulo){
        array_splice($this->listaCompras,$articulo,1);
        Session::put('carrito',$this->listaCompras);
        $this->emit('eliminarArticuloCarro',$articulo);
    }
    public function pagarArticulos(){
        $this->listaCompras=[];
        Session::put('carrito',$this->listaCompras);
        $this->emit('vaciarCarro');
        $this->dispatchBrowserEvent('cerrarModal');

    }    
   
}
