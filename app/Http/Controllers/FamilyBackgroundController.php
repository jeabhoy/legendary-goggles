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
        if ($request->fatherDeceased == 'True')
        {
            $familyBackground->fatherDeceased = $request->fatherDeceased;
        }
        else
        {
            $familyBackground->fatherDeceased = 'False';
        }
        $familyBackground->fatherOccupation = $request->fatherOccupation;
        $familyBackground->fatherContactNo = $request->fatherContactNumber;
        $familyBackground->motherName = $request->motherName;
        if ($request->motherDeceased == 'True')
        {
            $familyBackground->motherDeceased = $request->motherDeceased;
        }
        else
        {
            $familyBackground->motherDeceased = 'False';
        }
        $familyBackground->motherOccupation = $request->motherOccupation;
        $familyBackground->motherContactNo = $request->motherContactNumber;
        $familyBackground->physicalProblems = $request->physicalProblems;
        $familyBackground->allergies = $request->allergies;
        $familyBackground->treatmentSought = $request->treatmentSought;
        $familyBackground->medicineTaken = $request->medicineTaken;
        $familyBackground->save();
        return redirect()->route('adminIndexSibling', ['id' => $id]);
    }

    public function edit($familyBackgroundId, $id)
    {
        $userFamilyBackground = (new FamilyBackground)->find($familyBackgroundId);
        $user = (new User)->find($id);
        return view('admin.editStudent.familyBackground', compact('userFamilyBackground', 'user'));
    }
}
