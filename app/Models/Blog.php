<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'author',
        'title',
        'img',
        'desc',
    ];

    public array $translatable = ['title', 'desc'];
}
