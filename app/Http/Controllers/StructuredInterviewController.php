<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStructuredInterview;
use App\Interview;
use App\User;
use Illuminate\Http\Request;

class StructuredInterviewController extends Controller
{
    public function create($id)
    {
        $user = (new User)->find($id);
        return view('admin.createStudent.createStudentStructuredInterview', compact('user'));
    }

    public function store(StoreStructuredInterview $request, $id)
    {
        $interview = new Interview;
        $interview->id = $id;
        $interview->user_id = $id;
        $interview->characteristics = $request->characteristics;
        $interview->concern = $request->concern;
        $interview->fatherInter = $request->fatherInterpersonal;
        $interview->motherInter = $request->motherInterpersonal;
        $interview->siblingsInter = $request->siblingsInterpersonal;
        $interview->relativesInter = $request->relativesInterpersonal;
        $interview->friendsInter = $request->friendsInterpersonal;
        $interview->describeFather = $request->describeFather;
        $interview->describeMother = $request->describeMother;
        $interview->describeFamily = $request->describeFamily;
        $interview->radioStrength = $request->strength;
        $interview->radioWeakness = $request->weakness;
        $interview->decideEnroll = $request->decideToEnroll;
        $interview->otherDecide = $request->decideToEnrollOthers;
        $interview->factorInfluenced = $request->factorInfluenced;
        $interview->otherFactor = $request->factorInfluencedOthers;
        $interview->save();
        return redirect()->route('adminManageStudentIndex')->with('status', 'Record Successfully added!');
    }
}
