<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
 public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'age' => 'required|integer|min:18',
    ]);

    return response()->json([
        'message' => 'Validation successful',
        'data' => $validated
    ]);
}
}
