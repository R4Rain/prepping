<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;
    protected $table = 'communities';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function members()
    {
        return $this->belongsToMany(User::class, 'community_details');
    }

    public function feeds()
    {
        return $this->hasManyThrough(Feed::class, CommunityDetail::class, 'community_id', 'community_detail_id');
    }
}
