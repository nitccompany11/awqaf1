<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
    	$this->data['roles'] = Role::get();

    	$this->data['title'] = trans('admin.roles');

    	return view('admin.role.index', $this->data);	
    }

    public function add()
    {
    	$this->data['title'] = trans('admin.addRole');

    	return view('admin.role.add', $this->data);
    }

    public function save(Request $request)
    {
    	$this->validate($request, [

    		'name' => 'required|string|max:191',
    		'slug' => 'required|string|max:191',

    	]);

    	$add = new Role;

	    $add->name = $request->input('name');
	    $add->slug = $request->input('slug');

	    $add->save();

        \LogActivity::addActivityLog('Create New Role Have Name '. $request->name .' From Admin ' . auth()->user()->name);

	    return back()->with('success', trans('admin.addSuccess'));
    }

    public function edit($id)
    {
    	$this->data['role'] = Role::findOrFail($id);

    	$this->data['title'] = trans('admin.editRole') . ' | ' . $this->data['role']->name;

    	return view('admin.role.edit', $this->data);
    }

    public function saveEdit(Request $request)
    {
    	$this->validate($request, [

    		'name' => 'required|string|max:191',
    		'slug' => 'required|string|max:191',

    	]);

    	$edit = Role::findOrFail($request->input('id'));

    	$edit->name = $request->input('name');
	    $edit->slug = $request->input('slug');

        \LogActivity::addActivityLog('Edit Role Have Name '. $edit->name .' From Admin ' . auth()->user()->name);

    	$edit->update();

    	return back()->with('success', trans('admin.saveSuccess'));

    }	

    public function delete($id)
    {
    	$delete = Role::findOrFail($id);

        \LogActivity::addActivityLog('Delete Role Have Name '. $delete->name .' From Admin ' . auth()->user()->name);

    	$delete->delete();

    	return back()->with('success', trans('admin.deleteSuccess'));

    }
}
