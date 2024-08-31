<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'slug',
        'url',
        'is_status',
    ];

    public function getStatusLabel()
    {
        $statuses = [
            0 => 'Inactive',
            1 => 'Active'
        ];
    
        return $statuses[$this->status] ?? 'Unknown Status';
    }
}
