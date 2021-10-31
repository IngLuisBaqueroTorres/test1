<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use PhpParser\Node\Expr\FuncCall;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'email',
        'image',
        'pass',
        'phone',
        'last_name',
        'created_at',
        'description',
        'state'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime:d-m-Y',
    ];

    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }
    
    /**
     * Recupero url de la imagen de perfil
     *
     * 
     */
    public function adminlte_image(){
        $img = Auth::user()->image;
        if(!$img){
            return 'https://picsum.photos/300/300';
        }
        return $img;
    }

    /**
     * Recupero el rol del usuario
     *
     * 
     */
    public function adminlte_desc(){
        return Auth::user()->first_name.' '.Auth::user()->last_name;
    }

    /**
     * Ir a perfil del usuario
     *
     * 
     */
    public function adminlte_profile_url(){
        return 'profile/username';
    }

    // relacion con el producto 
    // un usuario puede tener varios productos
    public function products(){
        return $this->hasMany(Product::class);
    }

    

}
