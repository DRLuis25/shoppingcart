<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaComprasController extends Controller
{
    public function index(Request $request){
        return view('shop.productos');
    }
}
