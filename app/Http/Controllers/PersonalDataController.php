<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PersonalDataController extends Controller
{
	public function create()
	{
		return view('admin.createStudent.createStudentPersonalData');
	}
}
