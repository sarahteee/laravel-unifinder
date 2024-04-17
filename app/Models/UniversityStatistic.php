<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class UniversityStatistic extends Model
{
    use HasFactory;

    protected $fillable = ['university_id', 'year', 'number_of_students', 'student_to_staff_ratio'];

    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
