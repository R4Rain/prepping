<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;
    protected $table = 'feeds';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function getCreatedTime($created_at) {
        return str_ireplace(
            [' seconds', ' second', ' minutes', ' minute', ' hours', ' hour', ' days', ' day', ' weeks', ' week'], 
            ['s', 's', 'm', 'm', 'h', 'h', 'd', 'd', 'w', 'w'], 
            $created_at->diffForHumans()
        );
    }

    public function communityDetail()
    {
        return $this->belongsTo(CommunityDetail::class);
    }

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
