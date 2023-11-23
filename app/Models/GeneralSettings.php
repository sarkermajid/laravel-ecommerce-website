<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
