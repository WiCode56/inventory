<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'kd_barang',
        'name',
        'stock_total',
        'price',
        'price_total',

    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'kd_barang', 'kd_barang');
    }
}
