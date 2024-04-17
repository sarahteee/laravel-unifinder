<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class University extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'universityName',
        'imageURL',
        'country_id',
        'year',
        'number_of_students',
        'student_to_staff_ratio'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function statistics()
    {
        return $this->hasMany(UniversityStatistic::class);
    }
}
