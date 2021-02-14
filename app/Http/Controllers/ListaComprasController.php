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
    public function welcome()
    {
        $random = Productos::first();
        return view('welcome',compact('random'));
    }

    public function detalleproducto($id){
        $producto=Productos::where('id','=',$id)->first();
        return view('shop.detalleprod',compact(['producto']));
    }
    public function signin(Type $var = null)
    {
        return view('signin');
    }
}
