<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

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
                        ->simplePaginate(9);

        return view('provedores',compact('users'));
    }

    /**
     * traer a un provedor en especifico
     *
     * @autor jose kor 31/10/2021
     */
    public function show($id){ 
        $provedor = User::findOrFail($id);
        $seguidores = DB::table('favorite_user')
                            ->select('id')
                            ->where('user_favorite_id', $id)
                            ->where('favorite',1)
                            ->count();
                            
        return view('provedor',compact(['provedor','seguidores']));
    }

    public function getProductos($id){

        $results = DB::select( DB::raw("SELECT img.id, 
        img.url, 
        img.state AS img_state,
        prod.state AS prod_state,
        prod.id, 
        prod.price,
        prod.name AS prod_name, 
        prod.category_id, 
        prod.custom_category_id,
        cat.name AS cat_name,
        cus_cat.name AS cus_name
        FROM product AS prod
        INNER JOIN
        image AS img 
        ON img.product_id = prod.id
        INNER JOIN
        custom_category AS cus_cat
        ON cus_cat.id = prod.custom_category_id
        INNER JOIN
        category AS cat
        ON cat.id = prod.category_id
        WHERE prod.user_id = :user_id AND 
        prod.state = 'ACTIVE' AND img.state = 'ACTIVE'"), array(
       'user_id' => $id
     ));
        $categoriees = DB::select( DB::raw("SELECT DISTINCT
        prod.category_id, 
        cat.name AS cate_name
        FROM product AS prod
        INNER JOIN
        custom_category AS cus_cat
        ON cus_cat.id = prod.custom_category_id
        INNER JOIN
        category AS cat
        ON cat.id = prod.category_id
        WHERE prod.user_id = :user_id AND 
        prod.state = 'ACTIVE' " ), array(
       'user_id' => $id,
     ));
        
        return view('catalogos',compact(['results','categoriees']));
    }

    public function getProducto($id){

        $producto = DB::select( DB::raw("SELECT img.id, 
        img.url, 
        img.state AS img_state,
        prod.state AS prod_state,
        prod.id, 
        prod.price,
        prod.name AS prod_name, 
        prod.category_id, 
        prod.custom_category_id,
        prod.description,
        prod.user_id AS prod_user_id
        FROM product AS prod
        INNER JOIN
        image AS img 
        ON img.product_id = prod.id
        WHERE prod.id = :id AND 
        prod.state = 'ACTIVE'AND img.state = 'ACTIVE'"), array(
       'id' => $id
     ));
        // var_dump($producto);
        return view('producto',compact(['producto']));
    }

}
