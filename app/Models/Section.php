<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['name'];

    use HasFactory;

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    
}
