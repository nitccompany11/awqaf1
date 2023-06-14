<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blogs;

use File;

class BlogsController extends Controller
{
    public $path;

    public function __construct()
    {
        $this->path =  public_path() . '/uploads/blogs/';
    }

    public function index()
    {
        if(checkPermission(auth()->user()->group_id, 102) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['title'] = trans('admin.blogs');

        $this->data['blogs'] = Blogs::orderBy('id', 'desc')->get();

        return view('admin.blogs.index', $this->data);
    }

    public function create()
    {
        if(checkPermission(auth()->user()->group_id, 103) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['title'] = trans('admin.addBlog');

        return view('admin.blogs.add', $this->data);
    }

    public function store(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 103) == false) {

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
            'keyword_ar' => 'nullable|string|min:3',
            'keyword_en' => 'nullable|string|min:3',

        ]);

        $add = new Blogs;

        $add->name_ar = $request->name_ar;
        $add->name_en = $request->name_en;
        $add->image = setImage($request->image, $this->path);
        $add->content_ar = $request->content_ar;
        $add->content_en = $request->content_en;
        $add->description_ar = $request->description_ar;
        $add->description_en = $request->description_en;
        $add->keyword_ar = $request->keyword_ar;
        $add->keyword_en = $request->keyword_en;

        $add->save();

        \LogActivity::addActivityLog('Create New Blog Have Name '. $request->name_en .' From Admin ' . auth()->user()->name);

        return back()->with('success', trans('admin.addSuccess'));
    }

    public function edit($id)
    {
        if(checkPermission(auth()->user()->group_id, 104) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['blogs'] = Blogs::findOrFail($id);

        if(session()->get('lang') == 'en') {
            
            $title  = $this->data['blogs']->name_en;

        } else {

            $title  = $this->data['blogs']->name_ar;

        }

        $this->data['title'] = trans('admin.editBlog') . ' ' . $title;

        return view('admin.blogs.edit', $this->data);
    }

    public function update(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 104) == false) {

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
            'keyword_ar' => 'nullable|string|min:3',
            'keyword_en' => 'nullable|string|min:3',
            
        ]);

        $update = Blogs::findOrFail($request->id);

        $update->name_ar = $request->name_ar;
        $update->name_en = $request->name_en;
        $update->content_ar = $request->content_ar;
        $update->content_en = $request->content_en;
        $update->description_ar = $request->description_ar;
        $update->description_en = $request->description_en;
        $update->keyword_ar = $request->keyword_ar;
        $update->keyword_en = $request->keyword_en;

        if ($request->hasFile('image')) {
            
            $update->image = setImage($request->image, $this->path, $update->image);

        }

        \LogActivity::addActivityLog('Update Blog Have Name '. $update->name_en .' From Admin ' . auth()->user()->name);

        $update->update();

        return back()->with('success', trans('admin.saveSuccess'));
    }

    public function delete($id)
    {
        if(checkPermission(auth()->user()->group_id, 105) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $delete = Blogs::findOrFail($id);

        File::delete($this->path . $delete->image);

        \LogActivity::addActivityLog('Delete Blog Have Name '. $delete->name_en .' From Admin ' . auth()->user()->name);

        $delete->delete();

        return back()->with('success', trans('admin.deleteSuccess'));
    }

    public function show($id)
    {
        if(checkPermission(auth()->user()->group_id, 106) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['blogs']  = Blogs::findOrFail($id);

        if (session()->get('lang') == 'en') {
            
            $this->data['title'] = trans('admin.show') . ' ' . $this->data['blogs']->name_en;

        } else {

            $this->data['title'] = trans('admin.show') . ' ' . $this->data['blogs']->name_ar;

        }

        return view('admin.blogs.show', $this->data);
    }

    public function status($id)
    {
        if(checkPermission(auth()->user()->group_id, 102) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $blog  = Blogs::findOrFail($id);

        if ($blog->status == 1) {
            
            $blog->status = 0;

        } else {

            $blog->status = 1;

        }

        \LogActivity::addActivityLog('Change Status of Blog Have Name '. $blog->name_en .' From Admin ' . auth()->user()->name);

        $blog->update();

        return back()->with('success', trans('admin.saveSuccess'));
    }

    public function deleteAll(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 105) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }
        
        $this->validate($request, [

            'blogs.*' => 'required|integer',

        ]);

        if(!empty($request->blogs)) {

            foreach ($request->blogs as $value) {
            
                $delete = Blogs::findOrFail($value);

                File::delete($this->path . $delete->image);

                \LogActivity::addActivityLog('Delete Blog Have Name '. $delete->name_en .' From Admin ' . auth()->user()->name);

                $delete->delete();

            }

            return back()->with('success', trans('admin.deleteSuccess'));

        } else {

            return back()->with('error', trans('admin.noData'));

        }
    }
}
