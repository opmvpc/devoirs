<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'program'];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function homeworks()
    {
        return $this->hasMany(Homework::class);
    }
}
