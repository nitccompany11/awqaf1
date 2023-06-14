<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Layouts;

use File;

class LayoutsController extends Controller
{
    public function index()
    {
    	if(checkPermission(auth()->user()->group_id, 90) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->data['title'] = trans('admin.layouts');

    	$this->data['layouts'] = Layouts::orderBy('id', 'desc')->get();

    	return view('admin.layout.index', $this->data);
    }

    public function create()
    {
    	if(checkPermission(auth()->user()->group_id, 90) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->data['title'] = trans('admin.addLayout');

    	return view('admin.layout.add', $this->data);
    }

    public function store(Request $request)
    {
    	if(checkPermission(auth()->user()->group_id, 90) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->validate($request, [

            'name_ar' => 'required|string|max:165',
    		'name_en' => 'required|string|max:165',
            'slug' => 'required|string',
            'content_ar' => 'string|nullable',
            'content_en' => 'string|nullable',
            'image' => 'image|mimes:png,jpeg,jpg,gif',

    	]);

    	$add = new Layouts;

    	if ($request->hasFile('image')) {
    		
    		$path = 'public/uploads/layouts/';

	    	$image = $request->file('image');

	    	$ext = strtolower($image->getClientOriginalExtension());

	    	$photoName = time() . rand(0, 999999) . '.' . $ext;

	    	$image->move($path, $photoName);

	    	$add->image = $photoName;

    	}

        $add->name_ar = $request->input('name_ar');
        $add->name_en = $request->input('name_en');
    	$add->slug = $request->input('slug');
        $add->content_ar = $request->input('content_ar');
    	$add->content_en = $request->input('content_en');

    	$add->save();

        \LogActivity::addActivityLog('Create New Layouts Have Name '. $request->name_en .' From Admin ' . auth()->user()->name);

    	return back()->with('success', trans('admin.addSuccess'));
    }

    public function edit($id)
    {
    	if(checkPermission(auth()->user()->group_id, 92) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->data['layout'] = Layouts::findOrFail($id);

    	$this->data['title'] = trans('admin.editLayout') . ' ' . $this->data['layout']['name_' . getLang()];

    	return view('admin.layout.edit', $this->data);
    }

    public function update(Request $request)
    {
    	if(checkPermission(auth()->user()->group_id, 92) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->validate($request, [

    		'id' => 'required|integer',
            'name_ar' => 'required|string|max:165',
            'name_en' => 'required|string|max:165',
            'content_ar' => 'string|nullable',
            'content_en' => 'string|nullable',
            'image' => 'image|mimes:png,jpeg,jpg,gif',

    	]);

    	$edit = Layouts::findOrFail($request->input('id'));

    	if ($request->hasFile('image')) {

    		$path = 'public/uploads/layouts/';

    		File::delete($path . $edit->image);

	    	$image = $request->file('image');

	    	$ext = strtolower($image->getClientOriginalExtension());

	    	$photoName = time() . rand(0, 999999) . '.' . $ext;

	    	$image->move($path, $photoName);

	    	$edit->image = $photoName;

    	}

        $edit->name_ar = $request->input('name_ar');
        $edit->name_en = $request->input('name_en');
        $edit->content_ar = $request->input('content_ar');
        $edit->content_en = $request->input('content_en');

        \LogActivity::addActivityLog('Update Layout Have Name '. $edit->name_en .' From Admin ' . auth()->user()->name);

    	$edit->update();

    	return back()->with('success', trans('admin.saveSuccess'));
    }
}
