<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'slug',
        'user_id',
        'category_id',
        'description',
        'image',
        'trending',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
