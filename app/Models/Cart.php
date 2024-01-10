<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['name'];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps()->withPivot('quantity', 'created_at');
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
