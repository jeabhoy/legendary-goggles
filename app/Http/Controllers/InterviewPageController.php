<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ExitInterview;

class InterviewPageController extends Controller
{
  public function show($id)
  {
    $item = User::with('Interview', 'ExitInterview')->findOrFail($id);
    $array = json_decode($item, true);
    return view('user.interview', compact('array'));
  }
}
