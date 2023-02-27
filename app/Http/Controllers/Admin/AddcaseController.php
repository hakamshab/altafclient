<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\addcash;

class AddcaseController extends Controller
{
    public function info()
    {
        return view('admin/addcase/info');
    }
    public function create(Request $request)
    {
        $addcash = new addcash();
        $addcash->name = $request->name;
        $addcash->email = $request->email;
        $addcash->password = $request->password;
        $addcash->save();
        return redirect('Add Case-list');
    }
    public function showdata()
    {
        $addcash = addcash::all();
        return view('admin/addcase/list', compact('addcash'));
    }
    public function edit($id)
    {
        $addcash = addcash::find($id);
        return view('admin/addcase/edit', compact('addcash'));
    }
    public function update(Request $request, $id)
    {
        $addcash = addcash::find($id);
        $addcash->name = $request->name;
        $addcash->email = $request->email;
        $addcash->password = $request->password;
        $addcash->update();
        return redirect('Add Case-list');
    }
    public function delete($id)
    {
        $addcash = addcash::find($id);
        $addcash->delete();
        return redirect('Add Case-list');
    }
}
