<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'products_id', 'users_id'
    ];

    protected $hidden = [
        // ini untuk menyembunyikan field saat kita memanggil model tersebut misal kita tidak ingin memanggil foto pada saat kita memanggil model kategori ini masukanlah nama field yang ingin di sembunyikan itu di sini
    ];

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'products_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
