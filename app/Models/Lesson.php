<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $table = 'lessons';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function lessonStatus(){
        return $this->hasOne(LessonStatus::class);
    }
}
