<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    // Display validation form
    public function showForm()
    {
        return view('validation');
    }

    // Validate form
    public function validateForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        return back()->with('success', 'Validation successful!');
    }

    // Division by zero error
    public function errorHandling()
    {
        try {
            $number = 10 / 0;

            return "The result is: " . $number;

        } catch (\Throwable $e) {
            return "An error occurred: " . $e->getMessage();
        }
    }

    // Array error
    public function arrayError()
    {
        try {
            $students = ["John", "Mary"];

            $name = $students[5];

            return "Student: " . $name;

        } catch (\Throwable $e) {
            return "An error occurred: " . $e->getMessage();
        }
    }
    
    public function typeError()
    {
       try { 
         $number = 10;
         $text = "Hell0";

         $result = $number + $text;

         return "Result: " . $result;

  }catch (\Throwable $e) {
        return "An error occurred: " . $e->getMessage();
    }
    }
}