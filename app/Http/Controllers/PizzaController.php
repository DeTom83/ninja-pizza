<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    
    public function index(){
        $pizzas = [
            ['type' => 'Margarita','base' => 'Chees','price' => 4],
            ['type' => 'Meet lover','base' => 'Ham, Salam','price' => 6],
            ['type' => 'Hot lover','base' => 'Pepperoni, Jalapeni','price' => 5]
        ];
        return view('pizza',['pizzas' => $pizzas]);
    }

    public function show($id){
        return view('pizza',['id' => $id]);
    }
}
