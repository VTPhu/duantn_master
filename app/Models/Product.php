<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'slug',
        'quantily',
        'price',
        'size',
        'date',
        'thumnail',
        'saled',
        'view',
        'category_id',
        'brand_id',
        'description',
        'tags',
        'status',
        'updated_at',
    ];



    use HasFactory;
}
