<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PracticeStudentService;

class PracticeStudentController extends Controller
{
    public function showForm()
    {
        return view('practice_validation');
    }

    public function validateForm(Request $request, PracticeStudentService $practiceStudentService)
    {
        try {

            $request->validate([
                'name'   => 'required|string',
                'email'  => 'required|email',
                'course' => 'required|string',
                'age'    => 'required|integer|min:10',
            ]);

            // HERE is where we call the Service Class!
            $message = $practiceStudentService->getMessage();

            return back()->with('success', $message);

        } catch (\Exception $e) {

            return back()->with('error', 'Something went wrong.');

        }
    }
}