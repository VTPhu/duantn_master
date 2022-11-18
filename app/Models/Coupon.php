<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = 'coupons';
    protected $primaryKey = 'id';
    protected $fillable = [
        'code',
        'name',
        'content',
        'quantily',
        'type',
        'price_coupon',
        'type_coupon',
        'maxsimum',
        'status',
        'start_at',
        'expired_at',
        'updated_at',
    ];
    use HasFactory;
}
