<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'duration',
        'image',
        'description',
        'ingredients',
        'methods',
        'user_id',
    ];
    protected $with = [
        'user',
    ];
    public function duration_conversion($value){
        $hour = intdiv($value, 60);
        $minute = $value % 60;
        if($hour > 0 && $minute > 0){
            return $hour . " hour(s) " . $minute . " minute(s)";
        } else if($hour > 0){
            return $hour . " hour(s) ";
        } else{
            return $minute . " minute(s)";
        }
    }
    public function getDurationAttribute($value){
        return $this->duration_conversion($value);
    }
    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%');
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
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
