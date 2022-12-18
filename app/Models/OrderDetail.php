<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    protected $primaryKey = 'id';
    protected $fillable = [
        'product_name',
        'order_id',
        'product_id',
        'quantily_order',
        'size_detail',
        'color_detail',
        'total_pro_detail',
        'product_price',
        'updated_at',
    ];
    use HasFactory;
}
