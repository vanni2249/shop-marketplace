<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['title'];

    public function seller()
    {
       return $this->belongsTo(Seller::class);
    }

    public function attributes() //attrs
    {
        return $this->belongsToMany(Attribute::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function sections()
    {
        return $this->belongsToMany(Section::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function image()
    {
        return $this->images()->first();
    }
}
