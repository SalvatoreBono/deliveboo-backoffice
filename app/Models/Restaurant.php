<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Type;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        "email",
        "phone",
        "activity_name",
        "img",
        "address",
    ];

    /* Restaurant appartiene a User */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function types()
    {
        return $this->belongsToMany(Type::class);
    }
}
