<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reports;

use File;

class ReportsController extends Controller
{
    public $path;

    public function __construct()
    {
        $this->path =  public_path() . '/uploads/reports/';
    }

    public function index()
    {
        if(checkPermission(auth()->user()->group_id, 185) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['title'] = trans('admin.reports');

        $this->data['reports'] = Reports::orderBy('id', 'desc')->get();

        return view('admin.reports.index', $this->data);
    }

    public function create()
    {
        if(checkPermission(auth()->user()->group_id, 186) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['title'] = trans('admin.addReport');

        return view('admin.reports.add', $this->data);
    }

    public function store(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 186) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'name_ar'   => 'required|string|max:165',
            'name_en'   => 'required|string|max:165',
            'image'  => 'required|image|mimes:png,jpg,jpeg',
            'file' => 'required|mimes:pdf',
            'date_project' => 'required|date_format:Y-m-d',

        ]);

        $add = new Reports;

        $add->name_ar = $request->name_ar;
        $add->name_en = $request->name_en;
        $add->date_project = $request->date_project;
        $add->image = setImage($request->image, $this->path);
        $add->file = setImage($request->file, $this->path);
        $add->user_id = auth()->user()->id;

        $add->save();

        \LogActivity::addActivityLog('Create New Report Have Name '. $request->name_en .' From Admin ' . auth()->user()->name);

        return back()->with('success', trans('admin.addSuccess'));
    }

    public function edit($id)
    {
        if(checkPermission(auth()->user()->group_id, 187) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['reports'] = Reports::findOrFail($id);

        if(session()->get('lang') == 'en') {
            
            $title  = $this->data['reports']->name_en;

        } else {

            $title  = $this->data['reports']->name_ar;

        }

        $this->data['title'] = trans('admin.editReport') . ' ' . $title;

        return view('admin.reports.edit', $this->data);
    }

    public function update(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 187) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'id'       => 'required|integer',
            'name_ar'  => 'required|string|max:165',
            'name_en'  => 'required|string|max:165',
            'image'  => 'nullable|image|mimes:png,jpg,jpeg',
            'file' => 'nullable|mimes:pdf',
            'date_project' => 'required|date_format:Y-m-d',
            
        ]);

        $update = Reports::findOrFail($request->id);

        $update->name_ar = $request->name_ar;
        $update->name_en = $request->name_en;
        $update->date_project = $request->date_project;

        if ($request->hasFile('image')) {
            
            $update->image = setImage($request->image, $this->path, $update->image);

        }

        if ($request->hasFile('file')) {
            
            $update->file = setImage($request->file, $this->path, $update->file);

        }

        \LogActivity::addActivityLog('Update Report Have Name '. $update->name_en .' From Admin ' . auth()->user()->name);

        $update->update();

        return back()->with('success', trans('admin.saveSuccess'));
    }

    public function delete($id)
    {
        if(checkPermission(auth()->user()->group_id, 188) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $delete = Reports::findOrFail($id);

        File::delete($delete->image);
        File::delete($delete->file);

        \LogActivity::addActivityLog('Delete Report Have Name '. $delete->name_en .' From Admin ' . auth()->user()->name);

        $delete->delete();

        return back()->with('success', trans('admin.deleteSuccess'));
    }

    public function show($id)
    {
        if(checkPermission(auth()->user()->group_id, 189) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['reports']  = Reports::findOrFail($id);

        if (session()->get('lang') == 'en') {
            
            $this->data['title'] = trans('admin.show') . ' ' . $this->data['reports']->name_en;

        } else {

            $this->data['title'] = trans('admin.show') . ' ' . $this->data['reports']->name_ar;

        }

        return view('admin.reports.show', $this->data);
    }

    public function status($id)
    {
        if(checkPermission(auth()->user()->group_id, 185) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $reports  = Reports::findOrFail($id);

        if ($reports->status == 1) {
            
            $reports->status = 0;

        } else {

            $reports->status = 1;

        }

        \LogActivity::addActivityLog('Change Status of Report Have Name '. $reports->name_en .' From Admin ' . auth()->user()->name);

        $reports->update();

        return back()->with('success', trans('admin.saveSuccess'));
    }

    public function deleteAll(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 188) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }
        
        $this->validate($request, [

            'reports.*' => 'required|integer',

        ]);

        if(!empty($request->reports)) {

            foreach ($request->reports as $value) {
            
                $delete = Reports::findOrFail($value);

                File::delete($delete->image);
                File::delete($delete->file);

                \LogActivity::addActivityLog('Delete Report Have Name '. $delete->name_en .' From Admin ' . auth()->user()->name);

                $delete->delete();

            }

            return back()->with('success', trans('admin.deleteSuccess'));

        } else {

            return back()->with('error', trans('admin.noData'));

        }
    }
}
