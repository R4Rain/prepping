<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupDetail extends Model
{
    use HasFactory;
    protected $table = 'group_details';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];
}
