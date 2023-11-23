<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Student;


class SampleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student_user = User::create([
            'name' => 'Student User',
            'email' => 'student@test.com',
            'mobilenumber' => '1234567890',
            'password' => bcrypt('password')
        ]);
        $student_user2 = User::create([
            'name' => 'Student User2',
            'email' => 'student2@test.com',
            'mobilenumber' => '1234567890',
            'password' => bcrypt('password')
        ]);
        $faculty_user = User::create([
            'name' => 'faculty User',
            'email' => 'faculty@test.com',
            'mobilenumber' => '1234567890',
            'password' => bcrypt('password')
        ]);
        $staff_user = User::create([
            'name' => 'staff User',
            'email' => 'staff@test.com',
            'mobilenumber' => '1234567890',
            'password' => bcrypt('password')
        ]);


        $student =new Student();
        $student->lrn = "123456789101";
        $student->status = "ADMITTED";
        $student->elementary = "Elementary School";
        $student->firstname = "john";
        $student->middlename = "kenneth";
        $student->lastname = "macalintal";
        $student->birthdate = "1998-07-13";
        $student-> sex = "m";
        $student->barangay = "kiling";
        $student->municipal = "macarthur";
        $student->province = "leyte";
        $student->zip = "6509";
        $student->mother = "mother macalintal";
        $student->father = "father carampatana";
        $student->guardian = "guardian esplanada";
        $student->contact = "09184670118";
        $student->gradelevelcompleted = "Grade 9";
        $student->lastschoolyearcompleted = "2019";
        $student->schoolname = "Abuyog Community College";
        $student->schooladdress = "Guintagbucan Abuyog Leyte";
        $student->schoolid = "1234567890";
        $student->user_id = $student_user->id;
        $student->created_by = 1;
        $student->updated_by = 1;
        $student->save();
    }
}
