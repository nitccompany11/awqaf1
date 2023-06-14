<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Projects;
use App\Models\ProjectPoints;

use File;

class ProjectsController extends Controller
{
    public $path;

    public function __construct()
    {
        $this->path =  public_path() . '/uploads/projects/';
    }

    public function index()
    {
        if(checkPermission(auth()->user()->group_id, 180) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['title'] = trans('admin.projects');

        $this->data['projects'] = Projects::orderBy('id', 'desc')->get();

        return view('admin.projects.index', $this->data);
    }

    public function create()
    {
        if(checkPermission(auth()->user()->group_id, 181) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['title'] = trans('admin.addProject');

        return view('admin.projects.add', $this->data);
    }

    public function store(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 181) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'name_ar'   => 'required|string|max:165',
            'name_en'   => 'required|string|max:165',
            'image'  => 'required|image|mimes:png,jpg,jpeg',
            'content_ar'   => 'required|string|max:10000',
            'content_en'   => 'required|string|max:10000',
            'description_ar' => 'nullable|string|min:3',
            'description_en' => 'nullable|string|min:3',
            'date_project' => 'required|date_format:Y-m-d',

        ]);

        $add = new Projects;

        $add->name_ar = $request->name_ar;
        $add->name_en = $request->name_en;
        $add->image = setImage($request->image, $this->path);
        $add->content_ar = $request->content_ar;
        $add->content_en = $request->content_en;
        $add->description_ar = $request->description_ar;
        $add->description_en = $request->description_en;
        $add->date_project = $request->date_project;

        $add->save();

        \LogActivity::addActivityLog('Create New Project Have Name '. $request->name_en .' From Admin ' . auth()->user()->name);

        return back()->with('success', trans('admin.addSuccess'));
    }

    public function point($id)
    {
        if(checkPermission(auth()->user()->group_id, 181) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['title'] = trans('admin.addPoint');

        $this->data['projects'] = Projects::findOrFail($id);

        return view('admin.projects.point', $this->data);
    }

    public function pointSave(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 181) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'id' => 'required|integer|min:1',
            'name_ar'   => 'required|string|max:165',
            'name_en'   => 'required|string|max:165',
            'description_ar' => 'nullable|string|min:3',
            'description_en' => 'nullable|string|min:3',

        ]);

        $add = new ProjectPoints;

        $add->name_ar = $request->name_ar;
        $add->name_en = $request->name_en;
        $add->description_ar = $request->description_ar;
        $add->description_en = $request->description_en;
        $add->project_id = $request->id;

        $add->save();

        \LogActivity::addActivityLog('Create New Project Point Have Name '. $request->name_en .' From Admin ' . auth()->user()->name);

        return back()->with('success', trans('admin.addSuccess'));
    }

    public function edit($id)
    {
        if(checkPermission(auth()->user()->group_id, 182) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['projects'] = Projects::findOrFail($id);

        if(session()->get('lang') == 'en') {
            
            $title  = $this->data['projects']->name_en;

        } else {

            $title  = $this->data['projects']->name_ar;

        }

        $this->data['title'] = trans('admin.editProject') . ' ' . $title;

        return view('admin.projects.edit', $this->data);
    }

    public function update(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 182) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'id'       => 'required|integer',
            'name_ar'  => 'required|string|max:165',
            'name_en'  => 'required|string|max:165',
            'image'  => 'nullable|image|mimes:png,jpg,jpeg',
            'content_ar'   => 'required|string|max:10000',
            'content_en'   => 'required|string|max:10000',
            'description_ar' => 'nullable|string|min:3',
            'description_en' => 'nullable|string|min:3',
            'date_project' => 'required|date_format:Y-m-d',
            
        ]);

        $update = Projects::findOrFail($request->id);

        $update->name_ar = $request->name_ar;
        $update->name_en = $request->name_en;
        $update->content_ar = $request->content_ar;
        $update->content_en = $request->content_en;
        $update->description_ar = $request->description_ar;
        $update->description_en = $request->description_en;
        $update->date_project = $request->date_project;

        if ($request->hasFile('image')) {
            
            $update->image = setImage($request->image, $this->path, $update->image);

        }

        \LogActivity::addActivityLog('Update Project Have Name '. $update->name_en .' From Admin ' . auth()->user()->name);

        $update->update();

        return back()->with('success', trans('admin.saveSuccess'));
    }

    public function editPoint($id)
    {
        if(checkPermission(auth()->user()->group_id, 182) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['point'] = ProjectPoints::findOrFail($id);

        if(session()->get('lang') == 'en') {
            
            $title  = $this->data['point']->name_en;

        } else {

            $title  = $this->data['point']->name_ar;

        }

        $this->data['title'] = trans('admin.editPoint') . ' ' . $title;

        return view('admin.projects.editPoint', $this->data);
    }

    public function updatePoint(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 182) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'id'       => 'required|integer',
            'name_ar'  => 'required|string|max:165',
            'name_en'  => 'required|string|max:165',
            'description_ar' => 'nullable|string|min:3',
            'description_en' => 'nullable|string|min:3',
            
        ]);

        $update = ProjectPoints::findOrFail($request->id);

        $update->name_ar = $request->name_ar;
        $update->name_en = $request->name_en;
        $update->description_ar = $request->description_ar;
        $update->description_en = $request->description_en;

        \LogActivity::addActivityLog('Update Project Point Have Name '. $update->name_en .' From Admin ' . auth()->user()->name);

        $update->update();

        return back()->with('success', trans('admin.saveSuccess'));
    }

    public function delete($id)
    {
        if(checkPermission(auth()->user()->group_id, 183) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $delete = Projects::findOrFail($id);

        File::delete($delete->image);

        \LogActivity::addActivityLog('Delete Project Have Name '. $delete->name_en .' From Admin ' . auth()->user()->name);

        $delete->delete();

        return back()->with('success', trans('admin.deleteSuccess'));
    }

    public function deletePoint($id)
    {
        if(checkPermission(auth()->user()->group_id, 183) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $delete = ProjectPoints::findOrFail($id);

        File::delete($delete->image);

        \LogActivity::addActivityLog('Delete Project Point Have Name '. $delete->name_en .' From Admin ' . auth()->user()->name);

        $delete->delete();

        return back()->with('success', trans('admin.deleteSuccess'));
    }

    public function show($id)
    {
        if(checkPermission(auth()->user()->group_id, 184) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['projects']  = Projects::findOrFail($id);

        if (session()->get('lang') == 'en') {
            
            $this->data['title'] = trans('admin.show') . ' ' . $this->data['projects']->name_en;

        } else {

            $this->data['title'] = trans('admin.show') . ' ' . $this->data['projects']->name_ar;

        }

        return view('admin.projects.show', $this->data);
    }

    public function status($id)
    {
        if(checkPermission(auth()->user()->group_id, 180) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $projects  = Projects::findOrFail($id);

        if ($projects->status == 1) {
            
            $projects->status = 0;

        } else {

            $projects->status = 1;

        }

        \LogActivity::addActivityLog('Change Status of Project Have Name '. $projects->name_en .' From Admin ' . auth()->user()->name);

        $projects->update();

        return back()->with('success', trans('admin.saveSuccess'));
    }

    public function deleteAll(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 183) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }
        
        $this->validate($request, [

            'projects.*' => 'required|integer',

        ]);

        if(!empty($request->projects)) {

            foreach ($request->projects as $value) {
            
                $delete = Blogs::findOrFail($value);

                File::delete($delete->image);

                \LogActivity::addActivityLog('Delete Project Have Name '. $delete->name_en .' From Admin ' . auth()->user()->name);

                $delete->delete();

            }

            return back()->with('success', trans('admin.deleteSuccess'));

        } else {

            return back()->with('error', trans('admin.noData'));

        }
    }
}
