<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Traits\MultiTenantModelTrait;

class Note extends Model
{
    use HasFactory;
    use SoftDeletes;
    use MultiTenantModelTrait;

    protected $fillable = [
        'title',
        'user_id',
        'content',
        'status',
        'password',
        'slug'
    ];
}