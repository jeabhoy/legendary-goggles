<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalData;
use App\User;
use App\EducationalBackground;
use App\FamilyBackground;
use App\Interview;
use App\Counseling;
use App\Violation;
use DataTables;

class ManageStudentController extends Controller
{
  public function index()
  {
    // $data = User::all();
    // return view('admin.manageStudent', compact('data'));
    // return User::all();
    return view('admin.manageStudent');
  }

  public function store(Request $request)
  {
    $user = new User;
    $user->id = $request->id;
    $user->username = $request->id;
    $user->password = $Hash::make($request->id);
    $user->avatar = "defaultAvatar.png";
    $user->exitInterviewTaken = "False";
    $user->save();
    return Response::json($user);
  }

  public function getDataTable()
  {
    $query = (new User)->select('fullName', 'level', 'id');
    return datatables($query)
    ->addColumn('action', function ($query) {
                if ($query->level == 'Admin') {
                  return '';
                }
                return '
                    <div class="btn-group">
                      <a href="'.route('userProfileShow', ['id' => $query->id]).'" target="_blank"><button type="button" class="btn btn-default btn-xs"><i class="fa fa-user"></i> View</button></a>
                    </div>
                    <div class="btn-group">
                      <a href="'.route('adminEditRecordIndex', ['id' => $query->id]).'"><button type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</button></a>
                    </div>
                    <div class="btn-group placeholder">
                      <input type="hidden" id="userId" value="'.$query->id.'">
                      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal" data-backdrop="static" data-keyboard="false"><i class="fa fa-trash"></i> Delete</button>
                    </div>
                ';
            })
    ->make(true);
  }

  public function destroy(Request $request)
  {
    // $educationalBackground = EducationalBackground::find($id);
    // $educationalBackground->delete();
    // $familyBackground = FamilyBackground::find($id);
    // $familyBackground->delete();
    // $interview = Interview::find($id);
    // $interview->delete();
    // $personalData = PersonalData::find($id);
    // $personalData->delete();
    // $user = User::find($id);
    // $user->delete();
    Counseling::where('user_id', $request->id)->delete();
    Violation::where('user_id', $request->id)->delete();
    EducationalBackground::where('user_id', $request->id)->delete();
    FamilyBackground::where('user_id', $request->id)->delete();
    Interview::where('user_id', $request->id)->delete();
    PersonalData::where('user_id', $request->id)->delete();
    User::where('id', $request->id)->delete();
    // return redirect()->route('/final/public/admin/manageStudent')->with('status', 'Record successfully deleted!');
  }
}
