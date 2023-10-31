<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function customers()
    {
        return $this->belongsTo(Customers::class, 'customer_id');
    }
    protected $fillable = [
        'customer_id', 'total', 'status'
    ];
}
