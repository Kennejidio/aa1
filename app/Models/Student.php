<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Student extends Model
{

    use HasFactory;

    protected $fillable = [
        'lrn', 'elementary','status',
        'firstname', 'middlename',
        'lastname', 'extname',
        'birthdate', 'sex',
        'barangay', 'municipal',
        'province', 'zip',
        'mother', 'father',
        'guardian', 'contact',
        'gradelevelcompleted', 'lastschoolyearcompleted',
        'schoolname', 'schooladdress',
        'schoolid',
    ];

    protected $appends = ["age"];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    function user(){
        return $this->belongsTo(User::class);
    }

    function getAgeAttribute(){
        return Carbon::parse($this->attributes['birthdate'])->age;
    }
}
