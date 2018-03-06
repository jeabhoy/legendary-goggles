<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\User;

class CreateStudentProfileController extends Controller
{
	public function store(Request $request)
	{
		$request->validate([
			'profilePicture' =>'image',
			'schoolYear' => 'required',
			'id' =>
			  'required|
			  unique:users,id',
			'course' =>
			  'required_if:level,College|
			  nullable',
			'strand' =>
			  'required_if:level,Grade 11|
			  required_if:level,Grade 12|
			  nullable',
			'year' =>
			  'required_if:level,Grade 10|
			  required_if:level,Grade 9|
			  required_if:level,Grade 8|
			  required_if:level,Grade 7|
			  nullable',
			'section' =>
			  'required_if:level,Grade 10|
			  required_if:level,Grade 9|
			  required_if:level,Grade 8|
			  required_if:level,Grade 7|
			  nullable',
		]);
		$user = new User;
		$user->level = $request->level;
		$user->semester = $request->semester;
		$user->schoolYear = $request->schoolYear;
		$user->course = $request->course;
		$user->strand = $request->strand;
		$user->year = $request->year;
		$user->section = $request->section;
		$user->username = $request->id;
		$user->id = $request->id;
		$user->password = Hash::make($request->id);
		$user->exitInterviewTaken = 'false';
		if ($request->hasFile('profilePicture'))
		{
		  $extension = $request->profilePicture->extension();
		  $user->avatar = $request->studentNo.'.'.$extension;
		  Storage::putFileAs('public', $request->file('profilePicture'), $request->studentNo.'.'.$extension);
		}
		else {
		  $user->avatar = 'defaultAvatar.png';
		}
		$user->save();
		return redirect()->route('adminCreateStudentPersonalData', ['id' => $request->id]);
	}
}
