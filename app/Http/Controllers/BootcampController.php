<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BootcampController extends Controller
{
    public function home(){
        return "La feha y hora es: ".date('y-m-d H:i:s');
    }
    public function boot(){
        return "Hola desde Lumen";
    }
}
