<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ExitInterview;

class ExitInterviewPageController extends Controller
{
	public function show($id)
	{
	  $item = User::findOrFail($id);
	  $array = json_decode($item, true);
	  return view('user.exitInterview', compact('array'));
	}

	public function store(Request $request, $id)
	{
		$request->validate([
			'attracted' => 
			'required|
			min:15',
			'chooseToStudy' =>
			'required|
			min:15',
			'bestPartsOfPUNP' =>
			'required|
			min:15',
			'worstPartsOfPUNP' =>
			'required|
			min:15',
			'favoriteSubject' =>
			'required|
			min:15',
			'leastFavoriteSubject' =>
			'required|
			min:15',
			'likeBest' =>
			'required|
			min:15',
			'likeLeast' =>
			'required|
			min:15',
			'workWhileSchool' =>
			'required',
			'changesYouSuggest' =>
			'required|
			min:15',
			'bestInstructor' =>
			'required|
			min:15',
			'leastInstructor' =>
			'required|
			min:15',
			'immediatePlans' =>
			'required|
			min:15',
			'review' =>
			'required|
			min:15',
			'choosePUNP' =>
			'required|
			min:15',
			'comments' =>
			'required|
			min:15',
			'otherComments' =>
			'required|
			min:15',
		]);
		$user = User::find($id);
		$user->exitInterviewTaken = 'True';
		$user->save();
		$exitInterview = new ExitInterview;
		$exitInterview->user_id = $request->route('id');
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
		return redirect()->route('userProfileShow', ['id' => $id])->with('status', 'Exit Interview successfully taken!');
	}
}
