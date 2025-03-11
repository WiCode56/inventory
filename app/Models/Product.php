<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'kd_barang',
        'name',
        'description',
        'stock',
        'image',
        'price',
        'tgl_rilis'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'kd_barang', 'kd_barang');
    }

}
