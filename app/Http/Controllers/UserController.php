<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\EditUserRequest;
use App\Http\Requests\UserRequest;
use App\Http\Traits\Helper;

use App\Models\User;
use App\Models\PermissionGroups;
use App\Models\Notifications;
use App\Jobs\SendNotification;
use App\Models\Setting;

use Auth;
use File;
use Mail;

class UserController extends Controller
{   
    public $path;

    public function __construct()
    {
        $this->path = public_path() . '/uploads/users/';
    }

    public function user()
    {
        if(checkPermission(\Auth::user()->group_id, 3) == false) {

            return redirect()->back()->with('error', trans('admin.notPermission'));

        }

        if (session()->get('userType')) {
            session()->forget('userType');
            session()->put('userType', 'user');
        } else {
            session()->put('userType', 'user');
        }

        $this->data['title'] = trans('admin.user');

        $this->data['users'] = User::orderBy('id', 'desc')->where('admin', 1)->get();

        return view('admin.user.index', $this->data);
    }

    public function admin()
    {
        if(checkPermission(\Auth::user()->group_id, 3) == false) {

            return redirect()->back()->with('error', trans('admin.notPermission'));

        }

        if (session()->get('userType')) {
            session()->forget('userType');
            session()->put('userType', 'admin');
        } else {
            session()->put('userType', 'admin');
        }

        $this->data['title'] = trans('admin.adminT');

        $this->data['users'] = User::orderBy('id', 'desc')->where('admin', 3)->get();

        return view('admin.user.admin', $this->data);
    }

    public function create()
    {
        if(checkPermission(auth()->user()->group_id, 4) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        if(session()->get('userType') == 'user') {

            $this->data['title'] = trans('admin.addUser');

        } elseif (session()->get('userType') == 'admin') {
                
            $this->data['title'] = trans('admin.addAdmin');

        }

        $this->data['groups'] = PermissionGroups::orderBy('id', 'desc')->get();

        return view('admin.user.add', $this->data);
    }

    public function store(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 4) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'name' => 'required|string|max:156', 
            'email' => 'required|email|max:156||unique:users,email', 
            'password' => 'required|max:156',
            'phone' => 'required|digits:10||unique:users,phone',
            'admin' => 'required|integer|min:1',
            'group_id'  => 'nullable|integer|min:1',
            'image' => 'nullable|image|mimes:png,jpg,jpeg',

        ]);

        $add = new User;

        $add->name = $request->input('name');
        $add->email = $request->input('email');
        $add->phone = $request->input('phone');
        $add->admin = $request->input('admin');
        $add->group_id = $request->input('group_id');
        $add->password = bcrypt($request->input('password'));

        if (!is_null($request->image) && $request->hasFile('image')) {

            $add->image = setImage($request->image, $this->path);

        }

        $add->save();

        if(session()->get('userType') == 'user') {

            \LogActivity::addActivityLog('Create New User  Have Name '. $request->name .' From Admin ' . auth()->user()->name);

        } elseif (session()->get('userType') == 'admin') {

            \LogActivity::addActivityLog('Create New Admin Have Name '. $request->name .' From Admin ' . auth()->user()->name);

        }

        return back()->with('success', trans('admin.addSuccess'));

    }

    public function edit($id)
    {
        if(checkPermission(auth()->user()->group_id, 5) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['user'] = User::findOrFail($id);

        if(session()->get('userType') == 'user') {

            $this->data['title'] = trans('admin.editUser') . ' | ' . $this->data['user']->name;

        } elseif (session()->get('userType') == 'admin') {
                
            $this->data['title'] = trans('admin.editAdmin') . ' | ' . $this->data['user']->name;

        }

        $this->data['groups'] = PermissionGroups::orderBy('id', 'desc')->get();

        return view('admin.user.edit', $this->data);
    }

    public function update(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 5) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'id' => 'required|integer|min:1',
            'name' => 'required|string|max:156', 
            'email' => 'required|email|max:156|unique:users,email,'.$request->id,
            'phone' => 'required|digits:10|unique:users,phone,'.$request->id,
            'group_id'  => 'nullable|integer|min:1',
            'image' => 'nullable|image|mimes:png,jpg,jpeg',


        ]);

        $update = User::findOrFail($request->input('id'));

        $update->name = $request->input('name');
        $update->email = $request->input('email');
        $update->phone = $request->input('phone');
        $update->group_id = $request->input('group_id');

        if (!is_null($request->password)) {
            
            $update->password = bcrypt($request->input('password'));

        }

        if (!is_null($request->image) && $request->hasFile('image')) {
            
            $update->image = setImage($request->image, $this->path, $update->image);

        }

        \LogActivity::addActivityLog('Update Account for User Have Name '. $update->name .' From Admin ' . auth()->user()->name);

        $update->update();

        return back()->with('success', trans('admin.saveSuccess'));
    }

    public function delete($id)
    {
        if(checkPermission(auth()->user()->group_id, 6) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $delete = User::findOrFail($id);

        $delete->deleted_at = 1;

        \LogActivity::addActivityLog('Delete Account for User Have Name '. $delete->name .' From Admin ' . auth()->user()->name);

        $delete->update();

        return back()->with('success', trans('admin.deleteSuccess'));
    }

    public function show($id)
    {
        if(checkPermission(auth()->user()->group_id, 7) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['user'] = User::findOrFail($id);

        if (!is_null($this->data['user']->name)) {

            $this->data['title'] = trans('admin.show') . ' | ' . $this->data['user']->name;
            
        } else {

            $this->data['title'] = trans('admin.show') . ' | ' . $this->data['user']->phone;

        }

        return view('admin.user.show', $this->data);
    }

    public function deleteAll(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 6) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }
        
        $this->validate($request, [

            'user.*' => 'required|integer',

        ]);

        if(!empty($request->user)) {

            foreach ($request->user as $value) {
            
                $delete = User::findOrFail($value);

                $delete->deleted_at = 1;

                \LogActivity::addActivityLog('Delete Account for User Have Name '. $delete->name .' From Admin ' . auth()->user()->name);

                $delete->update();

            }

            return back()->with('success', trans('admin.deleteSuccess'));

        } else {

            return back()->with('error', trans('admin.noData'));

        }
    }
}
