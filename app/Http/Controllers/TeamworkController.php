<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teamwork;

use File;

class TeamworkController extends Controller
{
    public $path;

    public function __construct()
    {
        $this->path =  public_path() . '/uploads/teamwork/';
    }

    public function index()
    {
        if(checkPermission(auth()->user()->group_id, 155) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['title'] = trans('admin.teamwork');

        $this->data['teamwork'] = Teamwork::orderBy('id', 'desc')->get();

        return view('admin.teamwork.index', $this->data);
    }

    public function create()
    {
        if(checkPermission(auth()->user()->group_id, 156) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['title'] = trans('admin.addTeamwork');

        return view('admin.teamwork.add', $this->data);
    }

    public function store(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 156) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'name'   => 'required|string|max:165',
            'job'   => 'required|string|max:165',
            'image'  => 'required|image|mimes:png,jpg,jpeg',
            'content_en' => 'nullable|string|max:1200',
            'content_ar' => 'nullable|string|max:1200',

        ]);

        $add = new Teamwork;

        $add->name = $request->name;
        $add->job = $request->job;
        $add->content_en = $request->content_en;
        $add->content_ar = $request->content_ar;
        $add->image = setImage($request->image, $this->path);

        $add->save();

        \LogActivity::addActivityLog('Create New Teamwork Have Name '. $request->name .' From Admin ' . auth()->user()->name);

        return back()->with('success', trans('admin.addSuccess'));
    }

    public function edit($id)
    {
        if(checkPermission(auth()->user()->group_id, 157) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['teamwork'] = Teamwork::findOrFail($id);
            
        $title  = $this->data['teamwork']->name;

        $this->data['title'] = trans('admin.editTeamwork') . ' ' . $title;

        return view('admin.teamwork.edit', $this->data);
    }

    public function update(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 157) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'id'       => 'required|integer',
            'name'  => 'required|string|max:165',
            'job'  => 'required|string|max:165',
            'image'  => 'nullable|image|mimes:png,jpg,jpeg',
            'content_en' => 'nullable|string|max:1200',
            'content_ar' => 'nullable|string|max:1200',
            
        ]);

        $update = Teamwork::findOrFail($request->id);

        $update->name = $request->name;
        $update->job = $request->job;
        $update->content_en = $request->content_en;
        $update->content_ar = $request->content_ar;

        if ($request->hasFile('image')) {
            
            $update->image = setImage($request->image, $this->path, $update->image);

        }

        \LogActivity::addActivityLog('Update Teamwork Have Name '. $update->name .' From Admin ' . auth()->user()->name);

        $update->update();

        return back()->with('success', trans('admin.saveSuccess'));
    }

    public function delete($id)
    {
        if(checkPermission(auth()->user()->group_id, 158) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $delete = Teamwork::findOrFail($id);

        File::delete($this->path . $delete->image);

        \LogActivity::addActivityLog('Delete Teamwork Have Name '. $delete->name .' From Admin ' . auth()->user()->name);

        $delete->delete();

        return back()->with('success', trans('admin.deleteSuccess'));
    }

    public function show($id)
    {
        if(checkPermission(auth()->user()->group_id, 159) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['teamwork']  = Teamwork::findOrFail($id);
            
        $this->data['title'] = trans('admin.show') . ' ' . $this->data['teamwork']->name;

        return view('admin.teamwork.show', $this->data);
    }

    public function status($id)
    {
        if(checkPermission(auth()->user()->group_id, 155) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $teamwork  = Teamwork::findOrFail($id);

        if ($teamwork->status == 1) {
            
            $teamwork->status = 0;

        } else {

            $teamwork->status = 1;

        }

        \LogActivity::addActivityLog('Change Status of Teamwork Have Name '. $teamwork->name .' From Admin ' . auth()->user()->name);

        $teamwork->update();

        return back()->with('success', trans('admin.saveSuccess'));
    }

    public function deleteAll(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 158) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }
        
        $this->validate($request, [

            'teamwork.*' => 'required|integer',

        ]);

        if(!empty($request->teamwork)) {

            foreach ($request->teamwork as $value) {
            
                $delete = Teamwork::findOrFail($value);

                File::delete($this->path . $delete->image);

                \LogActivity::addActivityLog('Delete Teamwork Have Name '. $delete->name .' From Admin ' . auth()->user()->name);

                $delete->delete();

            }

            return back()->with('success', trans('admin.deleteSuccess'));

        } else {

            return back()->with('error', trans('admin.noData'));

        }
    }
}
