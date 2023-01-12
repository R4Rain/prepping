<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    protected $table = 'collections';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'collection_details');
    }
}
