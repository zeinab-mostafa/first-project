<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "my_products";
    protected $fillable = ['name','description','quantity','price'];
    protected $hidden =['created_at'];
    public  $timestamps = false;
}
