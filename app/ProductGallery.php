<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $fillable = [
        'photos', 'products_id'
    ];

    protected $hidden = [
        // 
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }

    public function user()
    {                                     // Parameter pertama adalah Primary key(id) di tabel users
        return $this->belongsTo(User::class, 'users_id', 'id');
        //                                      //parameter kedua adalah foreign key(users_id) yang ada di tabel product
    }
}
