<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Testom;

class TestomController extends Controller
{
    public function index()
    {
        if(checkPermission(auth()->user()->group_id, 150) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['title'] = trans('admin.testom');

        $this->data['testom'] = Testom::orderBy('id', 'desc')->get();

        return view('admin.testom.index', $this->data);
    }

    public function create()
    {
        if(checkPermission(auth()->user()->group_id, 151) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['title'] = trans('admin.addTestom');

        return view('admin.testom.add', $this->data);
    }

    public function store(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 151) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'name'   => 'required|string|max:165',
            'job'   => 'required|string|max:165',
            'comment_ar'   => 'required|string|max:10000',
            'comment_en'   => 'required|string|max:10000',

        ]);

        $add = new Testom;

        $add->name = $request->name;
        $add->job = $request->job;
        $add->comment_ar = $request->comment_ar;
        $add->comment_en = $request->comment_en;

        $add->save();

        \LogActivity::addActivityLog('Create New Testom Have Name '. $request->name_en .' From Admin ' . auth()->user()->name);

        return back()->with('success', trans('admin.addSuccess'));
    }

    public function edit($id)
    {
        if(checkPermission(auth()->user()->group_id, 152) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['testom'] = Testom::findOrFail($id);
            
        $title  = $this->data['testom']->name;

        $this->data['title'] = trans('admin.editTestom') . ' ' . $title;

        return view('admin.testom.edit', $this->data);
    }

    public function update(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 152) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'id'       => 'required|integer',
            'name'   => 'required|string|max:165',
            'job'   => 'required|string|max:165',
            'comment_ar'   => 'required|string|max:10000',
            'comment_en'   => 'required|string|max:10000',
            
        ]);

        $update = Testom::findOrFail($request->id);

        $update->name = $request->name;
        $update->job = $request->job;
        $update->comment_ar = $request->comment_ar;
        $update->comment_en = $request->comment_en;

        \LogActivity::addActivityLog('Update Testom Have Name '. $update->name_en .' From Admin ' . auth()->user()->name);

        $update->update();

        return back()->with('success', trans('admin.saveSuccess'));
    }

    public function delete($id)
    {
        if(checkPermission(auth()->user()->group_id, 153) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $delete = Testom::findOrFail($id);

        \LogActivity::addActivityLog('Delete Testom Have Name '. $delete->name .' From Admin ' . auth()->user()->name);

        $delete->delete();

        return back()->with('success', trans('admin.deleteSuccess'));
    }

    public function show($id)
    {
        if(checkPermission(auth()->user()->group_id, 154) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['testom']  = Testom::findOrFail($id);
            
        $this->data['title'] = trans('admin.show') . ' ' . $this->data['testom']->name;

        return view('admin.testom.show', $this->data);
    }

    public function status($id)
    {
        if(checkPermission(auth()->user()->group_id, 150) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $testom  = Testom::findOrFail($id);

        if ($testom->status == 1) {
            
            $testom->status = 0;

        } else {

            $testom->status = 1;

        }

        \LogActivity::addActivityLog('Change Status of Testom Have Name '. $testom->name .' From Admin ' . auth()->user()->name);

        $testom->update();

        return back()->with('success', trans('admin.saveSuccess'));
    }

    public function deleteAll(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 153) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }
        
        $this->validate($request, [

            'testom.*' => 'required|integer',

        ]);

        if(!empty($request->testom)) {

            foreach ($request->testom as $value) {
            
                $delete = Testom::findOrFail($value);

                \LogActivity::addActivityLog('Delete Testom Have Name '. $delete->name_en .' From Admin ' . auth()->user()->name);

                $delete->delete();

            }

            return back()->with('success', trans('admin.deleteSuccess'));

        } else {

            return back()->with('error', trans('admin.noData'));

        }
    }
}
