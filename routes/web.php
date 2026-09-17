<?php
use Illuminate\Support\Facades\Route;
use Illumimate\HTTP\Request;
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


Route::get('/test-trait', function () {
    $student = Student::first();
    
    if (!$student) {
        return response()->json(['message' => 'No student found']);
    }

    // Calling the trait method on the student instance
    return response()->json([
        'log_output' => $student->logActivity()
    ]);
});

// 1. Fetch Student (Returns 200 OK or 404 Not Found)
Route::get('/api/students/{id}', function ($id) {
    $student = Student::find($id);

    if (!$student) {
        return response()->json([
            'status' => 'error',
            'message' => 'Student record not found'
        ], 404);
    }

    return response()->json([
        'status' => 'success',
        'data' => $student
    ], 200);
});

// 2. Create Student (Returns 201 Created)
Route::post('/api/students', function (Request $request) {
    $student = Student::create([
        'name' => 'Kabu Sani',
        'email' => 'kabu' . rand(100, 999) . '@test.com',
        'age' => 22
    ]);

    return response()->json([
        'status' => 'success',
        'message' => 'Student created successfully',
        'data' => $student
    ], 201);
});