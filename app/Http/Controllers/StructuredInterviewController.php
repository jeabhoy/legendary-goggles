<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class StructuredInterviewController extends Controller
{
    public function create($id)
    {
        $user = (new User)->find($id);
        return view('admin.createStudent.createStudentStructuredInterview', compact('user'));
    }
}
