<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\SettingRequest;
use App\Models\Setting;

use File;

class SettingController extends Controller
{
    public function index()
    {
        if(checkPermission(auth()->user()->group_id, 1) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->data['title'] = trans('admin.settings');

    	$this->data['settings']	= Setting::get()->first();

    	return view('admin.setting.index', $this->data);
    }

    public function save(SettingRequest $request)
    {
        if(checkPermission(auth()->user()->group_id, 1) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        \LogActivity::addActivityLog('Update App Setting From Admin ' . auth()->user()->name);

    	Setting::find($request->input('id'))->update($request->all());

    	return back()->with('success', trans('admin.saveSuccess'));
    }

    public function image()
    {
        if(checkPermission(auth()->user()->group_id, 2) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->data['title']    = trans('admin.settingsImage');

        $this->data['settings'] = Setting::get()->first();

        return view('admin.setting.image', $this->data);
    }

    public function imageSave(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 2) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

        $this->validate($request, [

            'site_logo' => 'image|mimes:png,jpg,gif,jpeg',
            'site_icon' => 'image|mimes:png,jpg,gif,jpeg',
            'site_logo_footer' => 'image|mimes:png,jpg,gif,jpeg',

        ]);

        $path = public_path() . '/uploads/settings/';

        $setting = Setting::findOrFail($request->input('id'));

        if ($request->hasFile('site_logo')) {

            $logoImage  = setImage($request->file('site_logo'), $path, $setting->site_logo);

            $setting->site_logo = $logoImage;

        }

        if ($request->hasFile('site_icon')) {

            $iconImage  = setImage($request->file('site_icon'), $path, $setting->site_icon);

            $setting->site_icon = $iconImage;

        }

        if ($request->hasFile('site_logo_footer')) {

            $site_logo_footer  = setImage($request->file('site_logo_footer'), $path, $setting->site_logo_footer);

            $setting->site_logo_footer = $site_logo_footer;

        }

        $setting->update();

        \LogActivity::addActivityLog('Update App Setting Photo From Admin ' . auth()->user()->name);

        return back()->with('success', trans('admin.saveSuccess'));
    }
}
