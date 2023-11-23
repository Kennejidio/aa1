<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\GradeLevelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SchoolYearController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StaffDataController;
use App\Http\Controllers\StudentDataController;
use App\Http\Controllers\StudentRequirementController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/', function () {
    if (Auth::user()) {
        if (Auth::user()->hasRole('student')) {
            return redirect()->route('students.dashboard', Auth::user()->id);
        } elseif (Auth::user()->hasRole('faculty')) {
            return redirect()->route('faculty.dashboard', Auth::user()->id);
        } else {
            return redirect()->route('staff.dashboard', Auth::user()->id);

        }
    } else {
        return view('welcome');
    }
});
Route::get('/about', function () {
    return view('about');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('schoolyear', SchoolYearController::class);
    Route::resource('gradelevel', GradeLevelController::class);
    Route::resource('section', SectionController::class);
    Route::resource('subject', SubjectController::class);
    Route::resource('requirements', RequirementController::class);
    Route::resource('enrollments', EnrollmentController::class);
    Route::resource('studentdata', StudentDataController::class);
    Route::resource('staffdata', StaffDataController::class);
    Route::resource('classes', ClassController::class);
    Route::resource('studentrequirements', StudentRequirementController::class);

});

// * Students Route
Route::get('/students/{id}/dashboard', [App\Http\Controllers\StudentController::class, 'dashboard'])->name('students.dashboard');
Route::get('/students/{id}/schedules', [App\Http\Controllers\StudentController::class, 'schedules'])->name('students.schedules');
Route::get('/students/{id}/payments', [App\Http\Controllers\StudentController::class, 'payments'])->name('students.payments');
Route::get('/students/admissions/new', [App\Http\Controllers\StudentAdmissionController::class, 'createNew'])->name('students.create-new');
Route::post('/students/admissions/store', [App\Http\Controllers\StudentAdmissionController::class, 'store'])->name('students.store');
Route::get('/students/admissions/transferee', [App\Http\Controllers\StudentAdmissionController::class, 'createTransferee'])->name('students.create-transferee');

// * Admin/Staff/
Route::get('/staff/{id}/dashboard', [App\Http\Controllers\StaffController::class, 'dashboard'])->name('staff.dashboard');
Route::get('/staff/{id}/settings', [App\Http\Controllers\StaffController::class, 'settings'])->name('staff.settings');

// * Faculty Route
Route::get('/faculty/{id}/dashboard', [App\Http\Controllers\FacultyController::class, 'dashboard'])->name('faculty.dashboard');
Route::get('/faculty/{id}/students', [App\Http\Controllers\FacultyController::class, 'students'])->name('faculty.students');
Route::get('/faculty/{id}/class', [App\Http\Controllers\FacultyController::class, 'class'])->name('faculty.class');

// Route::get('/test', [App\Http\Controllers\TestController::class, 'test'])->name('test.test');
