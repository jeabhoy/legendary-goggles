<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserProfilePageController extends Controller
{
    public function show($id)
    {
      $item = User::with('PersonalData', 'FamilyBackground', 'EducationalBackground')->findOrFail($id);
      $array = json_decode($item, true);
      // $item = User::findOrFail($id);
      return view('user.profile', compact('array'));
    }
}
