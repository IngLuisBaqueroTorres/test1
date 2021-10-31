<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProvedoresController extends Controller
{
    /**
     * traer todos los provedores
     * usuarios con productos
     *
     * @autor jose kor 30/10/2021
     */
    public function getProvedores(){
        $provedores = Http::get('https://jsonplaceholder.typicode.com/users');
        $provedoresArray = $provedores->json();

        return view('provedores',compact('provedoresArray'));
    }
}
