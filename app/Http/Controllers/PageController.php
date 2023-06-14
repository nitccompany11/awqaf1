<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PageRequest;
use App\Http\Requests\EditPageRequest;

use App\Models\Pages;

use File;

class PageController extends Controller
{
    public $path;

    public function __construct()
    {
        $this->path = public_path() . '/uploads/pages/';
    }

    public function index()
    {
        if(checkPermission(auth()->user()->group_id, 8) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->data['title'] = trans('admin.pages');

    	$this->data['pages'] = Pages::orderBy('id', 'desc')->get();

    	return view('admin.pages.index', $this->data);
    }

    public function create()
    {
        if(checkPermission(auth()->user()->group_id, 10) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->data['title'] = trans('admin.addPage');

    	return view('admin.pages.add', $this->data);
    }

    public function store(PageRequest $request)
    {
        if(checkPermission(auth()->user()->group_id, 10) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $image = setImage($request->file('image'), $this->path);

    	Pages::create([

            'name_ar' => $request->name_ar, 
            'name_en' => $request->name_en,
            'content_ar' => $request->content_ar,
            'content_en' => $request->content_en,
            'keyword_ar' => $request->keyword_ar,
            'keyword_en' => $request->keyword_en,
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'menu_place' => $request->menu_place,
            'image_place' => $request->image_place,
            'image' => $image,

        ]);

        \LogActivity::addActivityLog('Create New Page Have Name '. $request->name_en .' From Admin ' . auth()->user()->name);

    	return back()->with('success', trans('admin.addSuccess'));
    }

    public function edit($id)
    {
        if(checkPermission(auth()->user()->group_id, 12) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->data['page'] = Pages::findOrFail($id);

    	if(session()->get('lang') == 'en') {
    		
    		$title = $this->data['page']->name_en;

    	} else {

    		$title = $this->data['page']->name_ar;

    	}

    	$this->data['title'] = trans('admin.editPage') . ' ' . $title;

    	return view('admin.pages.edit', $this->data);
    }

    public function update(EditPageRequest $request)
    {
        if(checkPermission(auth()->user()->group_id, 12) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $update = Pages::findOrFail($request->input('id'));

        $update->name_ar = $request->input('name_ar');
        $update->name_en = $request->input('name_en');
        $update->content_ar = $request->input('content_ar');
        $update->content_en = $request->input('content_en');
        $update->keyword_ar = $request->input('keyword_ar');
        $update->keyword_en = $request->input('keyword_en');
        $update->description_ar = $request->input('description_ar');
        $update->description_en = $request->input('description_en');
        $update->menu_place = $request->input('menu_place');
        $update->image_place = $request->input('image_place');

        if ($request->hasFile('image')) {
            
            $update->image = setImage($request->file('image'), $this->path, $update->image);

        }

        \LogActivity::addActivityLog('Update Page Have Name '. $update->name_en .' From Admin ' . auth()->user()->name);

        $update->update();

    	return back()->with('success', trans('admin.saveSuccess'));
    }

    public function noMenu($id)
    {
        if(checkPermission(auth()->user()->group_id, 8) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	Pages::find($id)->update(['menu' => 0]);

        $update = Pages::findOrFail($id);

        \LogActivity::addActivityLog('Change Page Have Name '. $update->name_en .' Remove Page To Menu From Admin ' . auth()->user()->name);

    	return back()->with('success', trans('admin.removedMenu'));
    }

    public function menu($id)
    {
        if(checkPermission(auth()->user()->group_id, 8) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	Pages::find($id)->update(['menu' => 1]);

        $update = Pages::findOrFail($id);

        \LogActivity::addActivityLog('Change Page Have Name '. $update->name_en .' Add Page To Menu From Admin ' . auth()->user()->name);

    	return back()->with('success', trans('admin.addedMenu'));
    }

    public function delete($id)
    {
        if(checkPermission(auth()->user()->group_id, 13) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$delete = Pages::find($id);

        \LogActivity::addActivityLog('Delete Page Have Name '. $delete->name_en .' From Admin ' . auth()->user()->name);

        $delete->delete();

    	return back()->with('success', trans('admin.deleteSuccess'));
    }

    public function show($id)
    {
        if(checkPermission(auth()->user()->group_id, 14) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['page'] = Pages::findOrFail($id);

        if (session()->get('lang') == 'en') {
            
            $this->data['title'] = trans('admin.show') . ' ' . $this->data['page']->name_en;

        } else {

            $this->data['title'] = trans('admin.show') . ' ' . $this->data['page']->name_ar;

        }

        return view('admin.pages.show', $this->data);
    }

    public function deleteAll(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 13) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }
        
        $this->validate($request, [

            'page.*' => 'required|integer',

        ]);

        if(!empty($request->page)) {

            foreach ($request->page as $value) {
            
                $delete = Pages::findOrFail($value);

                \LogActivity::addActivityLog('Delete Page Have Name '. $delete->name_en .' From Admin ' . auth()->user()->name);

                $delete->delete();

            }

            return back()->with('success', trans('admin.deleteSuccess'));

        } else {

            return back()->with('error', trans('admin.noData'));

        }
    }
}
