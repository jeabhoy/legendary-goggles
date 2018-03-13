<?php

namespace App\Http\Controllers;

use App\EducationalBackground;
use App\Http\Requests\StoreEducationalBackground;
use App\Http\Requests\StoreFamilyBackground;
use App\User;
use Illuminate\Http\Request;

class EducationalBackgroundController extends Controller
{
    public function create($id)
    {
        $user = (new User)->find($id);
        return view('admin.createStudent.createStudentEducationalBackground', compact('user'));
    }

    public function store(StoreEducationalBackground $request, $id)
    {
        $educationalBackground = new EducationalBackground;
        $educationalBackground->id = $id;
        $educationalBackground->user_id = $id;
        $educationalBackground->elemNameOfSchool = $request->elementaryNameSchool;
        $educationalBackground->elemAddressOfSchool = $request->elementaryAddressSchool;
        $educationalBackground->elemYearsOfAttendance = $request->elementaryYearsAttendance;
        $educationalBackground->highNameOfSchool = $request->highSchoolNameSchool;
        $educationalBackground->highAddressOfSchool = $request->highSchoolAddressSchool;
        $educationalBackground->highYearsOfAttendance = $request->highSchoolYearsAttendance;
        $educationalBackground->collegeNameOfSchool = $request->collegeNameSchool;
        $educationalBackground->collegeAddressOfSchool = $request->collegeAddressSchool;
        $educationalBackground->collegeYearsOfAttendance = $request->collegeYearsAttendance;
        $educationalBackground->gradNameOfSchool = $request->graduateVocationalNameSchool;
        $educationalBackground->gradAddressOfSchool = $request->graduateVocationalAddressSchool;
        $educationalBackground->gradYearsOfAttendance = $request->graduateVocationalYearsAttendance;
        $educationalBackground->subjectExcel = $request->subjectExcel;
        $educationalBackground->subjectLeast = $request->subjectLeastExcel;
        $educationalBackground->awardsReceived = $request->awardsHonorsReceived;
        $educationalBackground->firstPriority = $request->firstPriority;
        $educationalBackground->secondPriority = $request->secondPriority;
        $educationalBackground->thirdPriority = $request->thirdPriority;
        $educationalBackground->save();
        return redirect()->route('adminCreateStudentStructuredInterview', ['id' => $id]);
    }
}
