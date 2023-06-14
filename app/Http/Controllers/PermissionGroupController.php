<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PermissionGroups;
use App\Models\PermissionModel;
use App\Models\Permission;
use App\Models\User;
use App\Models\Role;

class PermissionGroupController extends Controller
{
    public function index()
    {
        if(checkPermission(auth()->user()->group_id, 28) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->data['title'] = trans('admin.permissionGroup');

    	$this->data['permissionGroup'] = PermissionGroups::orderBy('id', 'desc')->get();

    	return view('admin.permissionGroup.index', $this->data);
    }

    public function create()
    {
        if(checkPermission(auth()->user()->group_id, 29) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->data['title'] = trans('admin.addPermissionGroup');

    	$this->data['country'] = PermissionGroups::orderBy('id', 'desc')->get();

    	return view('admin.permissionGroup.add', $this->data);
    }

    public function store(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 29) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->validate($request, [

    		'name_ar' => 'required|string|max:165',
            'name_en' => 'required|string|max:165',

    	]);

        $add = new PermissionGroups;

        $add->name_ar = $request->name_ar;
        $add->name_en = $request->name_en;

        $add->save();

        \LogActivity::addActivityLog('Add New Permission Group Have Name '. $request->name_en .' From Admin ' . auth()->user()->name);

    	return back()->with('success', trans('admin.addSuccess'));
    }

    public function edit($id)
    {
        if(checkPermission(auth()->user()->group_id, 30) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->data['permissionGroup']	= PermissionGroups::findOrFail($id);

    	if(session()->get('lang') == 'en') {
    		
    		$title 	= $this->data['permissionGroup']->name_en;

    	} else {

    		$title 	= $this->data['permissionGroup']->name_ar;

    	}

    	$this->data['title'] = trans('admin.editPermissionGroup') . ' ' . $title;

    	return view('admin.permissionGroup.edit', $this->data);
    }

    public function update(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 30) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->validate($request, [

            'id'       => 'required|integer',
    		'name_ar'  => 'required|string|max:165',
            'name_en'  => 'required|string|max:165',
    		
    	]);

        $update = PermissionGroups::findOrFail($request->id);

        $update->name_ar = $request->name_ar;
        $update->name_en = $request->name_en;

        \LogActivity::addActivityLog('Update Permission Group Have Name '. $update->name_en .' From Admin ' . auth()->user()->name);

        $update->update();

    	return back()->with('success', trans('admin.saveSuccess'));
    }

    public function delete($id)
    {
        if(checkPermission(auth()->user()->group_id, 31) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$delete = PermissionGroups::find($id);

        $users = User::where('group_id', $delete->id)->count();

        if ($users > 0) {
            
            return back()->with('error', trans('admin.weFoundUsersNoDelete'));            

        } else {

            \LogActivity::addActivityLog('Delete Permission Group Have Name '. $delete->name_en .' From Admin ' . auth()->user()->name);

            $delete->delete();

            return back()->with('success', trans('admin.deleteSuccess'));

        }
    }

    public function show($id)
    {
        if(checkPermission(auth()->user()->group_id, 32) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['permissionGroup']  = PermissionGroups::findOrFail($id);

        if (session()->get('lang') == 'en') {
            
            $this->data['title'] = trans('admin.show') . ' ' . $this->data['permissionGroup']->name_en;

        } else {

            $this->data['title'] = trans('admin.show') . ' ' . $this->data['permissionGroup']->name_ar;

        }

        return view('admin.permissionGroup.show', $this->data);
    }

    public function permission($id)
    {
        if(checkPermission(auth()->user()->group_id, 33) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['group'] = PermissionGroups::findOrFail($id);

        $this->data['title'] = trans('admin.permission') . ' | ' . $this->data['group']['name_' . getLang()];

        $this->data['permissionModels'] = PermissionModel::orderBy('id', 'asc')->where('status', 1)->get();

        $this->data['permissions'] = Permission::orderBy('id', 'asc')->where('group_id', $this->data['group']->id)->get();

        return view('admin.permissionGroup.permission', $this->data);

    }

    public function permissionUpdate(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 33) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'id' => 'required|integer|min:1',
            'permissions.*' => 'required|integer',

        ]);

        $group = PermissionGroups::findOrFail($request->id);

        $update = Permission::where('group_id', $group->id)->get();

        if (count($update) > 0) {
            
            foreach ($update as $value) {
                $value->delete();
            }

            foreach ($request->permissions as $value) {
                
                $add = new Permission;
                $add->group_id = $group->id;
                $add->role_id = $value;

                $add->save();

            }

        } else {

            foreach ($request->permissions as $value) {
                
                $add = new Permission;
                $add->group_id = $group->id;
                $add->role_id = $value;

                $add->save();

            }

        }

        \LogActivity::addActivityLog('Update Role For Permission Group Have Name '. $group->name_en .' From Admin ' . auth()->user()->name);

        return back()->with('success', trans('admin.saveSuccess'));
    }

    public function deleteAll(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 31) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }
        
        $this->validate($request, [

            'group.*' => 'required|integer',

        ]);

        if(!empty($request->group)) {

            foreach ($request->group as $value) {
            
                $delete = PermissionGroups::find($value);

                $users = User::where('group_id', $delete->id)->count();

                if ($users < 0) {

                    \LogActivity::addActivityLog('Delete Permission Group Have Name '. $delete->name_en .' From Admin ' . auth()->user()->name);

                    $delete->delete();

                }
                

            }

            return back()->with('success', trans('admin.deleteSuccess'));

        } else {

            return back()->with('error', trans('admin.noData'));

        }
    }
}
