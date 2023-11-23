<?php

namespace App\Models;

use App\Models\Student;
use App\Models\SchoolYear;
use App\Models\Requirement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentRequirement extends Model
{
    use HasFactory;
    protected $fillable = [
        'student' ,'status', 'requirement', 'schoolyear',
    ];
    public function student(){

        return $this->belongsTo(Student::class);
    }

    public function school_year(){
        return $this->belongsTo(SchoolYear::class);
    }

    public function requirement(){
        return $this->belongsTo(Requirement::class);
    }
}
