<?php

namespace App\Http\Controllers;

use App\ExitInterview;
use App\Http\Requests\StoreExitInterview;
use App\User;
use Illuminate\Http\Request;

class ExitInterviewController extends Controller
{
    public function create($id)
    {
        $user = (new User)->find($id);
        return view('admin.createStudent.createExitInterview', compact('user'));
    }

    public function store(StoreExitInterview $request, $id)
    {
        $user = (new User)->find($id);
        $user->exitInterviewTaken = 'true';
        $user->save();
        $exitInterview = new ExitInterview;
        $exitInterview->id = $id;
        $exitInterview->user_id = $id;
        $exitInterview->department = $request->department;
        $exitInterview->attendedOther = $request->attendedOther;
        $exitInterview->attracted = $request->attracted;
        $exitInterview->chooseToStudy = $request->chooseToStudy;
        $exitInterview->bestPartsOfPUNP = $request->bestPartsOfPUNP;
        $exitInterview->worstPartsOfPUNP = $request->worstPartsOfPUNP;
        $exitInterview->favoriteSubject = $request->favoriteSubject;
        $exitInterview->leastFavoriteSubject = $request->leastFavoriteSubject;
        $exitInterview->likeBest = $request->likeBest;
        $exitInterview->likeLeast = $request->likeLeast;
        $exitInterview->workWhileSchool = $request->workWhileSchool;
        $exitInterview->changesYouSuggest = $request->changesYouSuggest;
        $exitInterview->bestInstructor = $request->bestInstructor;
        $exitInterview->leastInstructor = $request->leastInstructor;
        $exitInterview->immediatePlans = $request->immediatePlans;
        $exitInterview->review = $request->review;
        $exitInterview->choosePUNP = $request->choosePUNP;
        $exitInterview->comments = $request->comments;
        $exitInterview->otherComments = $request->otherComments;
        $exitInterview->save();
        return redirect()->route('adminManageStudentIndex', ['id' => $id])->with('status', 'Record Successfully added!');
    }
}
