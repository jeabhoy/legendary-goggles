<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FamilyBackgroundController extends Controller
{
    public function create($id)
    {
        $user = (new User)->find($id);
        return view('admin.createStudent.createStudentFamilyBackground', compact('user'));
    }
}
