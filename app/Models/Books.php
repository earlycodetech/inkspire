<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = "books";

    protected $fillable = [
        'category_id',
        'title',
        'author',
        'cover_image',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
