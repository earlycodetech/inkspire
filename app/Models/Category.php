<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    
    protected $fillable = [
        'title',
        'slug'
    ];

    public function books()
    {
        return $this->hasMany(Books::class, 'category_id');
    }
}
