<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Pet Has Multiple Category
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'pet_category', 'pet_id', 'category_id');
    }

    public function cities()
    {
        return $this->belongsToMany(City::class, 'pet_city', 'pet_id', 'city_id');
    }

    public function species()
    {
        return $this->belongsToMany(Species::class, 'pet_specie', 'pet_id', 'specie_id');
    }



    // public function applications()
    // {
    //     return $this->hasMany(Application::class);
    // }

    // public function getGenderAttribute($value)
    // {
    //     return ucfirst($value);
    // }

    // public function getAvailabilityAttribute($value)
    // {
    //     return ucfirst($value);
    // }

    // public function getStatusAttribute($value)
    // {
    //     return ucfirst($value);
    // }

    // public function getHealthStatusAttribute($value)
    // {
    //     return ucfirst($value);
    // }

    // public function getSpecialNeedsAttribute($value)
    // {
    //     return ucfirst($value);
    // }

    // public function getFeeAttribute($value)
    // {
    //     return number_format($value, 2);
    // }
}