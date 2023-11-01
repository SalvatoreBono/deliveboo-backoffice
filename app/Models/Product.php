<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "img",
        "description",
        "price",
        "visible",
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
