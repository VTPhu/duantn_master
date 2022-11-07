<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistical extends Model
{
    protected $table = 'statistical';
    protected $primaryKey = 'id_statistical';
    protected $timestamp = false;
    protected $fillable = [
        'order_date',
        'sales',
        'profit',
        'quantily',
        'total_order'

    ];
    use HasFactory;
}
