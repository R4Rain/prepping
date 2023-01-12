<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryHead extends Model
{
    use HasFactory;
    protected $table = 'category_heads';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
