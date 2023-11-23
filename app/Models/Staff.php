<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'firstname',
        'middlename',
        'lastname',
        'extname',
        'birthdate',
        'sex',
        'barangay',
        'municipal',
        'province',
        'zip',
        'mother',
        'father',
        'guardian',
        'contact',

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
