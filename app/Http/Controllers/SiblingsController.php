<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SiblingsController extends Controller
{
    public function index($id){
        $user = (new User)->find($id);
        return view('admin.createStudent.indexSiblings', compact('user'));
    }
}
