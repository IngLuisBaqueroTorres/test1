<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Userproductcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //obtener listado de productos de un usuario
        $user = User::findOrFail($id);
        $products = $user->products()
                        ->where('state','ACTIVE')->get(); 
        foreach ($products as $key => $product) {
            $products[$key] = [
                'data' => $product,
                'image' => $product->image->url
            ]; 
        }
        
        return response()->json(['data' => $products],200);
    }

}
