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
        'status',
        'start_at',
        'expired_at',
        'updated_at',
    ];
    use HasFactory;
}
