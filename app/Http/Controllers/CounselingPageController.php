<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Counseling;

class CounselingPageController extends Controller
{
	public function show($id)
	{
	  $item = User::with('Counseling')->findOrFail($id);
	  $array = json_decode($item, true);
	  return view('admin.userPages.counseling', compact('array'));
	}

	public function store(Request $request, $id)
	{
	  $request->validate([
	  	'dataSession' => 'required',
	  	'concern' => 'required',
	  ]);
	  $counseling = new Counseling;
	  $counseling->user_id = $id;
	  $counseling->dataSession = $request->dataSession;
	  $counseling->concern = $request->concern;
	  $counseling->save();
	  return redirect()->route('counselingIndex', ['id' => $id])->with('status', 'Record successfully created!');
	}
	
	public function update(Request $request, $id)
	{
		$request->validate([
			'dataSessionEdit' => 'required',
			'concernEdit' => 'required',
		]);
		$counseling = Counseling::find($request->hiddenId);
		$counseling->dataSession = $request->dataSessionEdit;
		$counseling->concern = $request->concernEdit;
		$counseling->save();
		return redirect()->route('counselingIndex', ['id' => $id])->with('status', 'Record successfully updated!');
	}

	public function destroy(Request $request, $id)
	{
		Counseling::where('id', $request->deleteId)->delete();
		return redirect()->route('counselingIndex', ['id' => $id])->with('status', 'Record successfully deleted!');
	}
}
