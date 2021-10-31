<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //acceder a todos los provedores (usuarios con productos)
        $users = User::join('product', 'product.user_id', '=', 'user.id')
                        ->select('user.id','user.first_name','user.last_name','user.image','user.phone','user.description','user.created_at')
                        ->distinct('user.id')
                        ->where('user.state', '=', 'ACTIVE')
                        ->where('product.state', '=', 'ACTIVE')
                        ->orderBy('user.id', 'ASC')
                        ->get();

        /* $users = User::has('products')
                    ->where('state','ACTIVE')
                    ->orderBy('id', 'ASC')
                    ->get();*/
        return response()->json(['data' => $users],200); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //acceder a un provedor en especifico
        return User::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
