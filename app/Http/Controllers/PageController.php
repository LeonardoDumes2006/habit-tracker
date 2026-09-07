<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $name = 'Leo';
        $habits = [ 'Correr' , 'Ler', 'Estudar'];
        return view('home', [
            'name' =>  $name,
            'habits' => $habits
        ]);
    }
}
