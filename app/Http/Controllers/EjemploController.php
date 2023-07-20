<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class EjemploController extends Controller
{
    //Código
    public function inicio(){
        return "Estamos en la home gracias al EjemploController";
    }
}