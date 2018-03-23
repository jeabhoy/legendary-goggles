<?php

namespace App\Http\Controllers;

use App\PersonalityTest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $personalityTest = PersonalityTest::all();
        return view('admin.dashboard', compact('personalityTest'));
    }
}
