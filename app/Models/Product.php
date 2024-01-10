<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['sku','options'];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function adjusts()
    {
        return $this->hasMany(Adjust::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class)->withTimestamps()->withPivot('quantity', 'created_at');
    }

    public function total_purchases()
    {
        return $this->purchases()->sum('quantity');
    }
    
    public function total_sales()
    {
        return $this->sales()->sum('quantity');
    }

    public function adjust_added()
    {
        return $this->adjusts()->where('type',1)->get();
    }
    
    public function adjust_removed()
    {
        return $this->adjusts()->where('type',2)->get();
    }

    public function total_adjust_added()
    {
        return $this->adjusts()->where('type',1)->sum('quantity');
    }

    public function total_adjust_removed()
    {
        return $this->adjusts()->where('type',2)->sum('quantity');
    }

    public function avalible()
    {
        return ($this->total_purchases() + $this->total_adjust_added()) - ($this->total_sales() + $this->total_adjust_removed());
    }

    protected $casts = [
        'options'=> Json::class,
    ];
}
