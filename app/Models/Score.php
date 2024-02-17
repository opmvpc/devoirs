<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = ['score'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function homework()
    {
        return $this->belongsTo(Homework::class);
    }
}
