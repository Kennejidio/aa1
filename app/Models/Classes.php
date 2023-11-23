<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = [
        'staff' ,'subject', 'schoolyear',
    ];
    public function staff(){

        return $this->belongsTo(Staff::class);
    }

    public function school_year(){
        return $this->belongsTo(SchoolYear::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

}
