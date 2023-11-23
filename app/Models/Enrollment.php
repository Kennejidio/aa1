<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GradeLevel;
use App\Models\SchoolYear;
use App\Models\Section;
use App\Models\Student;
class Enrollment extends Model
{
    use HasFactory;
    protected $fillable = [
        'student' ,'status', 'gradelevel', 'section', 'schoolyear',
    ];
    public function student(){

        return $this->belongsTo(Student::class);
    }

    public function school_year(){
        return $this->belongsTo(SchoolYear::class);
    }

    public function grade_level(){
        return $this->belongsTo(GradeLevel::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }
}
