<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\DemoController;
use App\Models\Student;
use App\Models\PracticeStudent;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/validation', [ValidationController::class, 'showForm']);
Route::post('/validation', [ValidationController::class, 'validateForm']);
Route::get('/error-handling', [ValidationController::class, 'errorHandling']);
Route::get('/another-error', [ValidationController::class, 'anotherError']);
Route::get('/array-error', [ValidationController::class, 'arrayError']);
Route::get('/type-error', [ValidationController::class, 'typeError']);
Route::get('/message', [DemoController::class, 'showMessage']);



Route::get('/test-relation', function () {
    // This fetches the first student along with all their practice records
    $student = Student::with('practiceStudents')->first();
    return response()->json($student);
});