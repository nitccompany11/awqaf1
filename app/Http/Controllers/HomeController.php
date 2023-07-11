<?php

namespace App\Http\Controllers;
use App\Http\Traits\Helper;

use Illuminate\Http\Request;
use App\Rules\GoogleCaptcha;

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Google\Cloud\Firestore\FirestoreClient;
use Carbon\Carbon;

use App\Models\Subscribe;
use App\Models\User;
use App\Models\Blogs;
use App\Models\Pages;
use App\Models\Testom;
use App\Models\Teamwork;
use App\Models\Contact;
use App\Models\Notifications;
use App\Models\Projects;
use App\Models\Companies;
use App\Models\Reports;
use App\Models\Certificates;

use Auth;
use File;
use Mail;
use GMaps;

class HomeController extends Controller
{
    use Helper;

    public function index()
    {
        $this->data['projects'] = Projects::where('status', 1)->orderBy('id', 'desc')->get()->take(3);

        $this->data['blogs'] = Blogs::where('status', 1)->orderBy('id', 'desc')->get()->take(3);

        $this->data['homePage'] = true;

        return view('website.home.welcome', $this->data);
    }

    public function home()
    {
        if(auth()->user()) {
            
            if(auth()->user()->admin == 3) {
                
                return redirect('/admin');
                
            } else {
                
                return redirect('/');
                
            }
            
        } else {
         
            return redirect('/');
            
        }
    }

    public function subscribe(Request $request)
    {
        $this->validate($request, [

            'email' => 'required|email|string|max:191',

        ]);

        $checkSubscribe = Subscribe::where('email', $request->email)->first();

        if (!is_null($checkSubscribe)) {
            
            return back()->with('error', trans('home.subscribedBefore'));

        }

        $add = new Subscribe;

        $add->email = $request->email;
        $add->save();

        $this->data['title'] = trans('home.thankYou');

        return back()->with('success', trans('home.subscribeSuccess'));
    }

    public function page($id)
    {
        $this->data['page']  = Pages::findOrFail($id);

        if (session()->get('lang') == 'en') {
            
            $this->data['title'] = $this->data['page']->name_en;

        } else {

            $this->data['title'] = $this->data['page']->name_ar;

        }

        $this->data['keyword'] = $this->data['page']['keyword_' . getLang()];
        $this->data['description'] = $this->data['page']['description_' . getLang()];

        if($this->data['page']->menu_place == 1) {

            $this->data['pageMenuOne'] = true;

        } else {

            $this->data['pageMenuTwo'] = true;

        }

        $this->data['pages'] = true;

        return view('website.home.page', $this->data);
    }

    public function vission()
    {
        $this->data['vision'] = getLayout('vision');
        $this->data['mission'] = getLayout('mission');
        $this->data['message'] = getLayout('message');

        $this->data['title'] = trans('home.vision');

        $this->data['pageMenuOne'] = true;

        return view('website.home.vission', $this->data);
    }

    public function contact()
    {
        $this->data['title'] = trans('admin.contact');

        $this->data['keyword'] = strip_tags(getLayout('keywords_contact_page')['content_' . getLang()]);

        $this->data['description'] = strip_tags(getLayout('description_contact_page')['content_' . getLang()]);

        $this->data['contactPage'] = true;

        return view('website.home.contact', $this->data);
    }

    public function contactSave(Request $request)
    {
        $this->validate($request, [

            'name' => 'required|string|max:191',
            'email' => 'required|email|max:191',
            'phone' => 'required|digits_between:9,11',
            'message' => 'required|string|max:200000',
            // 'g-recaptcha-response' => 'required|captcha',

        ]);

        Contact::create($request->all());

        return back()->with('success', trans('home.sendSuccess'));
    }

    public function companies()
    {
        $this->data['title'] = trans('admin.companies');

        $this->data['companies'] = Companies::where('status', 1)->get();

        $this->data['pageMenuOne'] = true;

        return view('website.companies.index', $this->data);
    }

    public function company($id)
    {
        $this->data['company'] = Companies::where('status', 1)->findOrFail($id);

        $this->data['title'] = $this->data['company']['name_' . getLang()];

        $this->data['pageMenuOne'] = true;

        return view('website.companies.single', $this->data);
    }

    public function teamwork()
    {
        $this->data['title'] = trans('admin.teamwork');

        $this->data['teamworks'] = Teamwork::orderBy('id', 'asc')->where('status', 1)->get();

        $this->data['pageMenuTwo'] = true;

        return view('website.teamwork.index', $this->data);
    }

    public function investment()
    {
        $this->data['investment'] = getLayout('investment');

        $this->data['title'] = getLayout('investment')['name_' . getLang()];

        $this->data['investmentPage'] = true;

        return view('website.home.investment', $this->data);
    }

    public function projects()
    {
        if (getSetting()->showProjectMenu == 0) {
            
            return back();

        }

        $this->data['title'] = trans('admin.projects');

        $this->data['projects'] = Projects::where('status', 1)->orderBy('id', 'desc')->get();

        $this->data['projectsPage'] = true;

        return view('website.projects.index', $this->data);
    }

    public function project($id)
    {
        if (getSetting()->showProjectMenu == 0) {
            
            return back();

        }

        $this->data['project'] = Projects::where('status', 1)->findOrFail($id);

        $this->data['title'] = $this->data['project']['name_' . getLang()];

        $this->data['projectsPage'] = true;

        $this->data['relateds'] = Projects::where('status', 1)->where('id', '!=', $id)->inRandomOrder()->get()->take(3);

        return view('website.projects.single', $this->data);
    }

    public function blogs()
    {
        $this->data['title'] = trans('home.blog');

        $this->data['blogs'] = Blogs::where('status', 1)->orderBy('id', 'desc')->get();

        $this->data['blogsPage'] = true;

        $this->data['keyword'] = strip_tags(getLayout('keywords_blogs_page')['content_' . getLang()]);

        $this->data['description'] = strip_tags(getLayout('description_blogs_page')['content_' . getLang()]);

        return view('website.blogs.index', $this->data);
    }

    public function blog($id)
    {
        $this->data['blog'] = Blogs::where('status', 1)->findOrFail($id);

        if (session()->get('lang') == 'en') {
            
            $this->data['title'] = $this->data['blog']->name_en;

            $this->data['description'] = $this->data['blog']->description_en;
            $this->data['keyword'] = $this->data['blog']->keyword_en;

        } else {

            $this->data['title'] = $this->data['blog']->name_ar;

            $this->data['description'] = $this->data['blog']->description_ar;
            $this->data['keyword'] = $this->data['blog']->keyword_ar;

        }

        $this->data['blogsPage'] = true;

        $this->data['relateds'] = Blogs::where('status', 1)->where('id', '!=', $id)->get()->take(3);

        return view('website.blogs.single', $this->data);
    }

    public function reports()
    {
        if (getSetting()->showReportsMenu == 0) {
            
            return back();

        }
        
        $this->data['title'] = trans('admin.reports');

        $this->data['reports'] = Reports::where('status', 1)->orderBy('id', 'desc')->get();

        $this->data['blogsPage'] = true;

        return view('website.reports.index', $this->data);
    }

    public function validCertificate(Request $request)
    {
        $this->validate($request, [

            'status' => 'required|integer|min:0|max:1',
            'certificate' => 'required|string|max:64',
            'slug' => 'required|string|min:1|max:191'

        ]);

        if ($request->slug == 'WA-AWQAF-PR') {
            
            $check = Certificates::where('day', date('Y-m-d'))->first();

            if (!is_null($check)) {
                
                $check->status = $request->status;
                $check->certificate = $request->certificate;

                $check->update();

            } else {

                $add = new Certificates;

                $add->status = $request->status;
                $add->certificate = $request->certificate;
                $add->same = 1;
                $add->day = date('Y-m-d');

                $add->save();

            }

            return response()->json(['status' => true]);

        }

        return response()->json(['status' => false]);
    }
}
