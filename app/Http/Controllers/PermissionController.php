<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Permission;
use App\Models\User;
use App\Models\Role;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {

            if(checkPermission(\Auth::user()->group_id, 12) == false) {

                return redirect('/admin')->with('error', trans('admin.notPermission'));

            }

            return $next($request);
        });
    }

    public function index()
    {
    	$this->data['users'] = User::where('admin', 3)->get();

    	$this->data['title'] = trans('admin.permission');

    	return view('admin.permission.index', $this->data);	
    }

    public function edit($id)
    {
    	$this->data['user'] = User::findOrFail($id);

    	$this->data['role'] = Role::get();

    	if(!empty(Permission::where('user_id', $id)->get()->first())) {

    		$this->data['permission'] 	= explode(',', Permission::where('user_id', $id)->get()->first()->role_id);
    	}

    	$this->data['title'] = trans('admin.editPermission') . ' | ' . $this->data['user']->name;

    	return view('admin.permission.edit', $this->data);
    }

    public function saveEdit(Request $request)
    {
    	$edit = Permission::where('user_id', $request->input('id'))->get()->first();

        $user = User::findOrFail($request->id);

    	if (!empty($edit)) {
    		
    		$role = implode(',', $request->input('role'));

	    	$edit->role_id 	= $role;

	    	$edit->update();

            \LogActivity::addActivityLog('Edit Permission For User '. $user->name .' From Admin ' . auth()->user()->name);

	    	return back()->with('success', trans('admin.saveSuccess'));

    	} else {

    		$add = new Permission;

	    	$role = implode(',', $request->input('role'));

	    	$add->user_id = $request->input('id');
	    	$add->role_id = $role;

	    	$add->save();

            \LogActivity::addActivityLog('Edit Permission For User '. $user->name .' From Admin ' . auth()->user()->name);

	    	return back()->with('success', trans('admin.saveSuccess'));

    	}

    }
}
