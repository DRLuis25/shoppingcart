<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Productos;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class ListaComprasController extends Controller
{
    public function index(Request $request){
        $productos=Productos::all();
        $categorias=Categorias::all();
        return view('shop.productos',compact(['productos','categorias']));
    }
    public function detalleproducto($id){
        $producto=Productos::where('id','=',$id)->first();
        return view('shop.detalleprod',compact(['producto']));
    }
    public function agregarproducto(Request $request){
        //Logica añadir producto al carrito
        $producto = Productos::where('id','=',$request->id)->first();
        //return $producto;
        $productocart=\Cart::add($producto, $request->cantidad);
        //return $productocart;

        
        return redirect(route('agregado',compact('producto')));
    }
    public function agregado(request $request){
        $producto = Productos::where('id','=',$request->producto)->first();
        Flash::success(__('carrito.added'));
        //Comprobar si c añade muchas veces
        return view('shop.agregado',compact('producto'));
    }
    public function review()
    {
        //Obtener carrito de compras
        return view('shop.review');
    }
    public function vaciarcarrito(){
        \Cart::destroy();
        Flash::success(__('carrito.empty'));
        return redirect(route('review'));
    }
    public function procesarpedido(){
        return view('shop.procesarpedido');
    }
    public function test(Request $request){

        $producto = Productos::where('id','=','1')->first();
        $producto2 = Productos::where('id','=','2')->first();
        $cart=\Cart::add($producto, 10);
        //return $cart->rowId;
        //$cart=\Cart::add($producto2, 1);
        //$cart=\Cart::remove($cart->rowId);
        $cart=\Cart::content();
        //$cart = \Cart::destroy();
        //dd($request->session());
        return $cart;
        
    }
}
