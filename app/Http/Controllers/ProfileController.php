<?php

namespace App\Http\Controllers;

use App\EducationalBackground;
use App\ExitInterview;
use App\FamilyBackground;
use App\Http\Requests\UpdateProfile;
use App\Interview;
use App\PersonalData;
use App\Sibling;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function edit($id)
    {
        $user = (new User)->with('PersonalData', 'Interview', 'FamilyBackground', 'EducationalBackground', 'Interview', 'ExitInterview', 'Sibling')->find($id);
        $array = json_decode($user, true);
        return view('admin.editStudent.editRecord', compact('array'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'profilePicture' =>'image',
            'schoolYear' => 'required',
            'username' =>
                ['required',
                    Rule::unique('users')->ignore($id),],
            'id' =>
                ['required',
                    Rule::unique('users')->ignore($id),],
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
        $user = (new User)->find($id);
        if ($request->hasFile('profilePicture'))
        {
            $extension = $request->profilePicture->extension();
            $user->avatar = $request->studentNo.'.'.$extension;
            Storage::putFileAs('public', $request->file('profilePicture'), $request->studentNo.'.'.$extension);
        }
        $user->level = $request->level;
        $user->semester = $request->semester;
        $user->schoolYear = $request->schoolYear;
        $user->course = $request->course;
        $user->strand = $request->strand;
        $user->year = $request->year;
        $user->section = $request->section;
        $user->username = $request->username;
        $user->password = Hash::make($request->id);
        $user->id = $request->id;
        $user->save();
        $userPersonalData = (new PersonalData)->find($id);
        $userPersonalData->user_id = $request->id;
        $userPersonalData->id = $request->id;
        $userPersonalData->save();
        $userFamilyBackground = (new FamilyBackground)->find($id);
        $userFamilyBackground->user_id = $request->id;
        $userFamilyBackground->id = $request->id;
        $userFamilyBackground->save();
        $userSibling = (new Sibling)->find($id);
        if ($userSibling)
        {
            foreach ($userSibling as $sibling)
            {
                $sibling->user_id = $request->user_id;
                $sibling->id = $request->id;
                $sibling->save();
            }
        }
        $userEducationalBackground = (new EducationalBackground)->find($id);
        $userEducationalBackground->user_id = $request->id;
        $userEducationalBackground->id = $request->id;
        $userEducationalBackground->save();
        $userInterview = (new Interview)->find($id);
        if ($userInterview)
        {
            $userInterview->id = $request->id;
            $userInterview->user_id = $request->id;
            $userInterview->save();
        }
        return redirect()->route('adminEditProfile', ['id' => $request->id])->with('status', 'Record successfully Updated');
    }
}