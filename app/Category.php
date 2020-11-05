<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'photo', 'slug'
    ];

    protected $hidden = [
        // ini untuk menyembunyikan field saat kita memanggil model tersebut misal kita tidak ingin memanggil foto pada saat kita memanggil model kategori ini masukanlah nama field yang ingin di sembunyikan itu di sini
    ];
}
