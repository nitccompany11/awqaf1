<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\Helper;
use App\Http\Requests\EditUserRequest;

use App\Models\Pages;
use App\Models\User;
use App\Models\Blogs;
use App\Models\Companies;
use App\Models\Projects;
use Carbon\Carbon;

use Auth;
use DB;

class AdminController extends Controller
{
    use Helper;

    public function index()
    {
    	$this->data['title'] = trans('admin.dashboard');

        $this->data['countPages'] = Pages::count();
        $this->data['countCompanies'] = Companies::count();
        $this->data['countProjects'] = Projects::count();
        $this->data['countBlogs'] = Blogs::count();

        $this->data['latestProjects'] = Projects::orderBy('id', 'desc')->get()->take(5);

        $this->data['latestBlogs'] = Blogs::orderBy('id', 'desc')->get()->take(5);

        $this->data['latestCompanies'] = Companies::orderBy('id', 'desc')->get()->take(5);

    	return view('admin.index', $this->data);
    }

    public function myProfile()
    {
        $this->data['myProfile'] = User::findOrFail(Auth::user()->id);

        $this->data['title'] = trans('admin.editMyProfile');

        return view('admin.user.myProfile', $this->data);
    }

    public function myProfileSave(EditUserRequest $request)
    {
        $update = User::findOrFail(Auth::user()->id);

        if (!is_null($request->input('password'))) {
            
            $update->password = bcrypt($request->input('password'));

        }

        $update->name = $request->input('name');
        $update->email = $request->input('email');
        $update->phone = $request->input('phone');
        $update->admin = $request->input('admin');

        $update->update();

        \LogActivity::addActivityLog('Update Profile Admin For ' . auth()->user()->name);

        return back()->with('success', trans('admin.saveSuccess'));
    }
}
