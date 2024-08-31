<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'url', 'image', 'remark', 'order_by', 'is_feature', 'is_status'];

    const STRING_MAX_300 = 'string|max:300';
}
