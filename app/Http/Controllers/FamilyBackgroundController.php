<?php

namespace App\Http\Controllers;

use App\FamilyBackground;
use App\Http\Requests\StoreFamilyBackground;
use App\User;
use Illuminate\Http\Request;

class FamilyBackgroundController extends Controller
{
    public function create($id)
    {
        $user = (new User)->find($id);
        return view('admin.createStudent.createStudentFamilyBackground', compact('user'));
    }

    public function store(StoreFamilyBackground $request, $id)
    {
        $familyBackground = new FamilyBackground;
        $familyBackground->id = $id;
        $familyBackground->user_id = $id;
        $familyBackground->fatherName = $request->fatherName;
        $familyBackground->fatherDeceased = $request->fatherDeceased;
        $familyBackground->fatherOccupation = $request->fatherOccupation;
        $familyBackground->fatherContactNo = $request->fatherContactNumber;
        $familyBackground->motherName = $request->motherName;
        $familyBackground->motherDeceased = $request->motherDeceased;
        $familyBackground->motherOccupation = $request->motherOccupation;
        $familyBackground->motherContactNo = $request->motherContactNumber;
        $familyBackground->physicalProblems = $request->physicalProblems;
        $familyBackground->allergies = $request->allergies;
        $familyBackground->treatmentSought = $request->treatmentSought;
        $familyBackground->medicineTaken = $request->medicineTaken;
        $familyBackground->save();
        return redirect()->route('adminIndexSibling', ['id' => $id]);
    }
}
