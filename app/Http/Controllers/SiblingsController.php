<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSibling;
use App\Sibling;
use App\User;
use Illuminate\Http\Request;

class SiblingsController extends Controller
{
    public function index($id)
    {
        $userSiblings = (new Sibling)->all()->where('id', $id);
        return view('admin.createStudent.indexSiblings', compact('userSiblings'));
    }

    public function create($id)
    {
        $user = (new User)->find($id);
        return view('admin.createStudent.sibling.createSibling', compact('user'));
    }

    public function store(StoreSibling $request, $id)
    {
        $sibling = new Sibling;
        $sibling->id = $id;
        $sibling->user_id = $id;
        $sibling->name = $request->siblingName;
        $sibling->age = $request->siblingAge;
        $sibling->educationalLevel = $request->siblingEducationalLevel;
        $sibling->save();
        return redirect()->route('adminIndexSibling', ['id' => $id]);
    }

    public function edit($siblingId)
    {
        $sibling = (new Sibling)->find($siblingId);
        return view('admin.createStudent.sibling.editSibling', compact('sibling'));
    }

    public function update(StoreSibling $request, $id, $siblingId)
    {
        $sibling = (new Sibling)->find($siblingId);
        $sibling->name = $request->siblingName;
        $sibling->age = $request->siblingAge;
        $sibling->educationalLevel = $request->siblingEducationalLevel;
        $sibling->save();
        return redirect()->route('adminIndexSibling', ['id' => $id]);
    }

    public function destroy(Request $request, $id)
    {
        $sibling = (new Sibling)->find($request->siblingId);
        $sibling->delete();
        return redirect()->route('adminIndexSibling', ['id' => $id]);
    }
}
