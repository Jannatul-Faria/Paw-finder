<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
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
    public function category(){
        return $this->belongsTo(Category::class);
    }
}