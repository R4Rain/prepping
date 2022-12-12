<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'rate',
        'user_id',
        'recipe_id',
    ];
    protected $with = [
        'user',
        'recipe'
    ];
    public function getCreatedAtAttribute($date){
        return Carbon::parse($date)->format('j F Y - h:i A');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function recipe(){
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }
}
