<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class ProvedoresController extends Controller
{
    /**
     * traer todos los provedores
     * usuarios con productos
     *
     * @autor jose kor 30/10/2021
     */
    public function getProvedores(){
        $users = User::join('product', 'product.user_id', '=', 'user.id')
                        ->join('city', 'city.id', '=', 'product.city_id')
                        ->select('user.id','user.first_name','user.last_name','user.image','user.phone','user.description','user.created_at','city.name')
                        ->distinct('user.id')
                        ->where('user.state', '=', 'ACTIVE')
                        ->where('product.state', '=', 'ACTIVE')
                        ->orderBy('user.id', 'ASC')
                        ->get();

        return view('provedores',compact('users'));
    }
}
