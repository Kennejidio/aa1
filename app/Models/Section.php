<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GradeLevel;

class Section extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'gradelevel', 'description',
    ];

    public function grade_level(){
        return $this->belongsTo(GradeLevel::class);
    }
}
