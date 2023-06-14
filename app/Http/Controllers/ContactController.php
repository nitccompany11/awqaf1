<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

use App\Models\Setting;

use Mail;

class ContactController extends Controller
{
    public function index()
    {
        if(checkPermission(auth()->user()->group_id, 26) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->data['contact']		= Contact::orderBy('id', 'desc')->get();

    	$this->data['title']		= trans('admin.contact');

    	return view('admin.contact.index', $this->data);
    }

    public function replay($id)
    {
        if(checkPermission(auth()->user()->group_id, 27) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->data['contact']		= Contact::findOrFail($id);

    	$this->data['title']		= trans('admin.replay') . ' ' . $this->data['contact']->name;

    	return view('admin.contact.replay', $this->data);
    }

    public function replaySend(Request $request)
    {
        if(checkPermission(auth()->user()->group_id, 27) == false) {

            return redirect('/admin')->with('error', trans('admin.notPermission'));

        }

    	$this->validate($request, [

    		'name' 				=> 'required|string|max:156',
    		'subject' 			=> 'required|string|max:256',
    		'email' 			=> 'required|email|max:156',
    		'message' 			=> 'required',

    	]);

    	$setting 	= Setting::get()->first();

    	$data = array(

            'msg'  			=> $request->message,
            'siteEmail' 	=> $setting->site_email,
            'emailSender' 	=> $request->email,
            'nameSender' 	=> $request->name,
            'subject'   	=> $request->subject,

        );

        Mail::send('admin.contact.send', $data, function ($m) use ($data){

            $m->to($data['emailSender'], $data['subject'])->subject($data['subject']);
            $m->from($data['siteEmail'], $data['subject'])->subject($data['subject']);

        });

        \LogActivity::addActivityLog('Replay Mail to '. $request->email .' From Admin ' . auth()->user()->name);

       return back()->with('success', trans('admin.sendMail'));
    }
}
