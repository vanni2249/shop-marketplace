<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = ['name','item_id','value'];

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
