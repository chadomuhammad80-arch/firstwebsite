<?php

namespace App\Http\Controllers;

use App\Http\Resources\PracticeStudentResource;
use App\Models\PracticeStudent;

class PracticeStudentApiController extends Controller
{
    public function index()
    {
        return PracticeStudentResource::collection(PracticeStudent::all());
    }
}