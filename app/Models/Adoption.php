<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function adaptor()
    {
        return $this->belongsTo(User::class, 'adopter_id');
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
