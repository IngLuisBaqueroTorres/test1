<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'show_phone',
        'created_at',
        'user_id',
        'state',
        'category_id',
        'city_id',
        'updated_at'
    ];

    // relacion con el provedor 
    public function provedor(){
        return $this->belongsTo(User::class,'user_id');
    }

    //traer imagen del producto
    public function image(){
        return $this->belongsTo(Image::class,'id','product_id');
    }
}
