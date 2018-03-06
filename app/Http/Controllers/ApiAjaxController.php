<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PersonalData;
use yajra\Datatables\Datables;

class ApiAjaxController extends Controller
{
    public function getDataTable()
    {
      $query = User::select('fullName', 'level', 'id');
      return datatables($query)->make(true);
      // $query = User::with('personalData')->select('users.*');
      // return $query;
      // return datatables($query)->make(true);
    }
}
