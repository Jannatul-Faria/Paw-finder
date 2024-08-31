<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getStatusLabel()
{
    $statuses = [
        1 => 'Active',
        2 => 'Pending',
        3 => 'Inactive',
    ];

    return $statuses[$this->status] ?? 'Unknown Status';
}
 public function pets()
    {
        return $this->belongsToMany(Pet::class, 'pet_category');
    }
    
}