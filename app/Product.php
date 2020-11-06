<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'users_id',
        'categories_id',
        'price',
        'description',
        'slug'
    ];

    protected $hidden = [
        // 
    ];

    // proses relasi ke tabel Categories, Users, Gallery

    // proses menrelasikan Product dengan tabel galeri
    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }
    // proses relasi product dengan tabel users
    public function user()
    {                                     // Parameter pertama adalah Primary key(id) di tabel users
        return $this->hasOne(User::class, 'id', 'users_id');
        //                                      //parameter kedua adalah foreign key(users_id) yang ada di tabel product
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}
