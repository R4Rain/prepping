<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Recipe extends Model
{
    use HasFactory;
    protected $table = 'recipes';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        });
        $query->when($filters['sort'] ?? false, function ($query, $sort) {
            if($sort == 2){
                return $query->orderBy('duration', 'DESC');
            } else if($sort == 3){
                return $query->orderBy('duration', 'ASC');
            } else{
                return $query->orderBy('created_at', 'DESC');
            }
        });
    }

    public function getHours($time){
        return round($time / 60);
    }
    
    public function getMinutes($time){
        return $time % 60;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_details');
    }

    public function collections()
    {
        return $this->belongsToMany(Collection::class, 'collection_details');
    }
}
