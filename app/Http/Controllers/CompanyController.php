<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Companies;

use File;

class CompanyController extends Controller
{
    public $path;

    public function __construct()
    {
        $this->path =  public_path() . '/uploads/companies/';
    }

    public function index()
    {
        if(checkPermission(auth()->user()->group_id, 175) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['title'] = trans('admin.companies');

        $this->data['companies'] = Companies::orderBy('id', 'desc')->get();

        return view('admin.companies.index', $this->data);
    }

    public function create()
    {
        if(checkPermission(auth()->user()->group_id, 176) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['title'] = trans('admin.addCompany');

        return view('admin.companies.add', $this->data);
    }

    public function store(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 176) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'name_ar'   => 'required|string|max:165',
            'name_en'   => 'required|string|max:165',
            'image'  => 'required|image|mimes:png,jpg,jpeg',
            'url'   => 'required|string|max:10000',
            'description_ar' => 'nullable|string|min:3',
            'description_en' => 'nullable|string|min:3',

        ]);

        $add = new Companies;

        $add->name_ar = $request->name_ar;
        $add->name_en = $request->name_en;
        $add->image = setImage($request->image, $this->path);
        $add->url = $request->url;
        $add->content_ar = $request->description_ar;
        $add->content_en = $request->description_en;

        $add->save();

        \LogActivity::addActivityLog('Create New Company Have Name '. $request->name_en .' From Admin ' . auth()->user()->name);

        return back()->with('success', trans('admin.addSuccess'));
    }

    public function edit($id)
    {
        if(checkPermission(auth()->user()->group_id, 177) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['companies'] = Companies::findOrFail($id);

        if(session()->get('lang') == 'en') {
            
            $title  = $this->data['companies']->name_en;

        } else {

            $title  = $this->data['companies']->name_ar;

        }

        $this->data['title'] = trans('admin.editCompany') . ' ' . $title;

        return view('admin.companies.edit', $this->data);
    }

    public function update(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 177) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'id'       => 'required|integer',
            'name_ar'  => 'required|string|max:165',
            'name_en'  => 'required|string|max:165',
            'image'  => 'nullable|image|mimes:png,jpg,jpeg',
            'url'   => 'required|string|max:10000',
            'description_ar' => 'nullable|string|min:3',
            'description_en' => 'nullable|string|min:3',
            
        ]);

        $update = Companies::findOrFail($request->id);

        $update->name_ar = $request->name_ar;
        $update->name_en = $request->name_en;
        $update->url = $request->url;
        $update->content_ar = $request->description_ar;
        $update->content_en = $request->description_en;

        if ($request->hasFile('image')) {
            
            $update->image = setImage($request->image, $this->path, $update->image);

        }

        \LogActivity::addActivityLog('Update Company Have Name '. $update->name_en .' From Admin ' . auth()->user()->name);

        $update->update();

        return back()->with('success', trans('admin.saveSuccess'));
    }

    public function delete($id)
    {
        if(checkPermission(auth()->user()->group_id, 178) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $delete = Companies::findOrFail($id);

        File::delete($this->path . $delete->image);

        \LogActivity::addActivityLog('Delete Company Have Name '. $delete->name_en .' From Admin ' . auth()->user()->name);

        $delete->delete();

        return back()->with('success', trans('admin.deleteSuccess'));
    }

    public function show($id)
    {
        if(checkPermission(auth()->user()->group_id, 179) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['companies']  = Companies::findOrFail($id);

        if (session()->get('lang') == 'en') {
            
            $this->data['title'] = trans('admin.show') . ' ' . $this->data['companies']->name_en;

        } else {

            $this->data['title'] = trans('admin.show') . ' ' . $this->data['companies']->name_ar;

        }

        return view('admin.companies.show', $this->data);
    }

    public function status($id)
    {
        if(checkPermission(auth()->user()->group_id, 175) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $companies  = Companies::findOrFail($id);

        if ($companies->status == 1) {
            
            $companies->status = 0;

        } else {

            $companies->status = 1;

        }

        \LogActivity::addActivityLog('Change Status of Company Have Name '. $companies->name_en .' From Admin ' . auth()->user()->name);

        $companies->update();

        return back()->with('success', trans('admin.saveSuccess'));
    }

    public function deleteAll(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 178) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }
        
        $this->validate($request, [

            'companies.*' => 'required|integer',

        ]);

        if(!empty($request->companies)) {

            foreach ($request->companies as $value) {
            
                $delete = Companies::findOrFail($value);

                File::delete($this->path . $delete->image);

                \LogActivity::addActivityLog('Delete Company Have Name '. $delete->name_en .' From Admin ' . auth()->user()->name);

                $delete->delete();

            }

            return back()->with('success', trans('admin.deleteSuccess'));

        } else {

            return back()->with('error', trans('admin.noData'));

        }
    }
}
