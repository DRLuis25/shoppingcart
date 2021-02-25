<?php

namespace App\Http\Controllers;

use App\Models\DetalleVentas;
use App\Models\Productos;
use App\Models\Ventas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;

class ComprasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function agregarproducto(Request $request){
        //Logica añadir producto al carrito
        $producto = Productos::where('id','=',$request->id)->first();
        //return $producto;
        $productocart=\Cart::add($producto, $request->cantidad);
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
        //return \Cart::content()['a775bac9cff7dec2b984e023b95206aa']->model;
        //Obtener carrito de compras
        return view('shop.review');
    }
    public function eliminarproducto(Request $request){
        //Logica eliminar producto al carrito
        $productocart=\Cart::remove($request->id);
        Flash::success(__('carrito.eliminado'));
        return redirect(route('review'));
    }
    public function vaciarcarrito(){
        \Cart::destroy();
        Flash::success(__('carrito.empty'));
        return redirect(route('review'));
    }
    public function revision()
    {
        return view('shop.revision');
    }
    public function procesarpedido(Request $request){
        //return \Cart::total();
        try {
            DB::beginTransaction();
            //Llenar cabecera
            $venta = new Ventas();
            $venta->cliente_id = Auth::user()->id;
            //Añadir tarjeta?
            $venta->ccname = $request->username;
            $venta->ccnumber = $request->cardNumber;
            $venta->cc = $request->mes."-".$request->anio."-".$request->cvv;
            //dirección envío
            $venta->direccion = $request->direccion;
            //Venta
            $venta->subtotal = \Cart::subtotal();
            $venta->total = \Cart::total();
            $venta->save();
            //Llenar detalle venta
            foreach (\Cart::content() as $item) {
                //return $item;//->model;
                $detalle = new DetalleVentas();
                $detalle->venta_id = $venta->id;
                $detalle->product_id = $item->model->id;
                $detalle->precio = $item->model->precio;
                $detalle->cantidad = $item->qty;
                $detalle->subtotal = $item->subtotal;
                $detalle->save();
                //Actualizar stock
                Productos::ActualizarStock($detalle->product_id,$detalle->cantidad);
            }
            DB::commit();
            \Cart::destroy();
            return redirect(route('procesado'));
        } catch (\Throwable $th) {
            Flash::error(__('shop.error'));
            dd($th);
            return redirect(route('procesado'));//Con error mejor llevar al carrito o no c
        }
        
    }
    public function procesado()
    {
        Flash::success(__('carrito.success'));
        return view('shop.procesarpedido');
    }
    public function ordenes()
    {
        $ordenes = Ventas::where('cliente_id','=',Auth::user()->id)->get();
        //return $ordenes;
        return view('shop.ordenes',compact('ordenes'));
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
