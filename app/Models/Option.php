<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = ['value','item_id'];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
