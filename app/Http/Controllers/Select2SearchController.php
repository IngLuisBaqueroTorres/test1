<?php

namespace App\Http\Controllers;
use App\Models\Place;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Select2SearchController extends Controller
{
    public function index()
    {
    	return view('home');
    }

    public function selectSearchPlace(Request $request)
    {
    	$searching = [];

        if($request->has('q')){
            $search = $request->q;
            
            $searching = DB::table('city')
                            ->select("id", "name")
                            ->where('name', 'LIKE', "%$search%")
                            ->get();
        }
        return response()->json($searching);
    }

    public function selectSearchCategory(Request $request)
    {
    	$searching = [];

        if($request->has('q')){
            $search = $request->q;
            
            $searching = DB::table('category')
                            ->select("id", "name", "state")
                            ->where('name', 'LIKE', "%$search%")
                            ->get();
        }
        return response()->json($searching);
    }

    public function showProductsActive($city, $category)
    {

        $users = User::join('product', 'product.user_id', '=', 'user.id')
        ->join('city', 'city.id', '=', 'product.city_id')
        ->select('user.id','user.first_name','user.last_name','user.image','user.phone','user.description','user.created_at','city.name')
        ->distinct('user.id')
        ->where('user.state', '=', 'ACTIVE')
        ->where('product.state', '=', 'ACTIVE')
        ->where('product.city_id', '=', $city)
        ->where('product.category_id', '=', $category)
        ->orderBy('user.id', 'ASC')
        ->simplePaginate(9);
        
        return view('provedores',compact('users'));
    }
}
