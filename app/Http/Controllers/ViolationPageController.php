<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Violation;

class ViolationPageController extends Controller
{
	public function show($id)
	{
	  $item = User::with('Violation')->findOrFail($id);
	  $array = json_decode($item, true);
	  return view('admin.userPages.violation', compact('array'));
	}

	public function store(Request $request, $id)
	{
	  $request->validate([
	  	'offense' => 'required',
	  	'resolution' => 'required',
	  ]);
	  $violation = new Violation;
	  $violation->user_id = $id;
	  $violation->offense = $request->offense;
	  $violation->resolution = $request->resolution;
	  $violation->save();
	  return redirect()->route('violationIndex', ['id' => $id])->with('status', 'Record successfully created!');
	}
	
	public function update(Request $request, $id)
	{
		$request->validate([
			'offenseEdit' => 'required',
			'resolutionEdit' => 'required',
		]);
		$violation = Violation::find($request->hiddenId);
		$violation->offense = $request->offenseEdit;
		$violation->resolution = $request->resolutionEdit;
		$violation->save();
		return redirect()->route('violationIndex', ['id' => $id])->with('status', 'Record successfully updated!');
	}

	public function destroy(Request $request, $id)
	{
		Violation::where('id', $request->deleteId)->delete();
		return redirect()->route('violationIndex', ['id' => $id])->with('status', 'Record successfully deleted!');
	}
}
