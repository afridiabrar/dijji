<?php

namespace App\Http\Controllers\Front;

use App\Models\Careers;
use App\Models\Faq;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Benefit;
use App\Models\Blogs;
use App\Models\Teams;
use App\Models\Apply_jobs;
use App\Models\Tickets;
use App\Models\ContactQuery;
use App\Models\NewsletterSubscriber;
use App\Models\Testimonials;

class IndexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }



  public function image_upload($file)
    {
        $extension = $file->getClientOriginalExtension(); // getting file extension
        $filename  = 'media-file-' . time() . '.' . $extension;
        $file->move(uploadsDir('/resume'), $filename);
        return $filename;
    }


    public function index()
    {
        $cmsPage = Page::where('slug', 'home')->first();
        $customers = Benefit::where('category', 0)->get();
        $retailers = Benefit::where('category', 1)->get();

        return view('front.index', compact('cmsPage', 'customers', 'retailers'));
    }



    public function page(Request $request, $slug = '')
    {
        $cmsPage = Page::where('slug', $slug)->first();
        if ($cmsPage) {

            $faqs = Faq::where('status', 1)->get();
            $testimonials = Testimonials::where('status', 1)->get();
            $blogs = Blogs::where('status', 1)->get();
            $careers = Careers::where('status', 1)->paginate(10);
            $retailers = Benefit::where('category', 1)->get();
            $customers = Benefit::where('category', 0)->get();
            $teams = Teams::where('status', 1)->get();

            return view('front.' . $cmsPage->page_name, compact('cmsPage', 'faqs', 'careers', 'testimonials', 'blogs', 'customers', 'retailers', 'teams'));
        }
        return '404 Page Not Found ';
    }
    public function blog(Request $request, $id)
    {
        $cmsPage = Page::where('slug', 'blog-detail')->first();
        if ($cmsPage) {


            $blog = Blogs::where(['id'=>$id,'status'=> 1])->first();

            return view('front.' . $cmsPage->page_name, compact('cmsPage', 'blog'));
        }
        return '404 Page Not Found ';
    }

public function job_detail(Request $request, $id)
{
    $cmsPage = Page::where('slug', 'job-detail')->first();
            $career = Careers::where(['id'=>$id,'status'=> 1])->first();
        if ($cmsPage ) {


            return view('front.' . $cmsPage->page_name, compact('cmsPage', 'career'));
        }
        return '404 Page Not Found ';
}

    public function submit_apply_job(Request $request)
    {
        // dd($request->file('media'));
        $request->validate(
            [
            'fullname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'job_id' => 'required',
            'media' => 'required|mimes:pdf,doc,docx|max:5000000',
            ]
        );

        $data = $request->except(
            [
                '_token',
                '_method'
            ]
        );
        if ($request->hasfile('media')) {
            $file = $request->file('media');
            $getImage = $this->image_upload($file);
            $data['media'] = $getImage;
        }
        $req = Apply_jobs::create($data);
        if ($req) {
            return redirect()
                ->back()
                ->with('success', 'Job Application submit successfully.');
        } else {
            return redirect()->back()
                ->with('error', 'Failed to submit query.');
        }
    }
  
    public function subscribe(Request $request)
    {
        $data = $request->validate(
            [

            'email' => 'required|unique:newsletter_subscribers,email',
            ]
        );
        $data = $request->except(
            [
                '_token',
                '_method'
            ]
        );
        $req = NewsletterSubscriber::create($data);
        if ($req) {
            return redirect()->back()
                ->with('success', 'subscribe successfully.');
        } else {
            return redirect()->back()
                ->with('error', 'Failed to submit query.');
        }
    }
    public function submit_ticket(Request $request)
    {
        $data = $request->validate(
            [
            'fname'=> 'required',
            'lname'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'postcode'=> 'required',
            'company_name'=> 'required',
            'no_store'=> 'required',
            'term_condition'=> 'required',
            'message'=> 'required',
            ]
        );
        $data = $request->except(
            [
                '_token',
                '_method',
                'g-recaptcha-response'
            ]
        );

        $req = Tickets::create($data);
        if ($req) {
            // dispatch(new \App\Jobs\SendContactFormEmailJob($request->all()));

            return redirect()->back()
                ->with('success', 'TTicket has been submitted successfully. Your Ticket no is #dt' . $req->id);
        } else {
            return redirect()->back()
                ->with('error', 'Failed to submit query.');
        }
    }
     public function submit_query(Request $request)
    {
        $data = $request->validate(
            [
            'fname'=> 'required',
            'lname'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'message'=> 'required',
            ]
        );
        $data = $request->except(
            [
                '_token',
                '_method',
            ]
        );

        $req = ContactQuery::create($data);
        if ($req) {
          
            return redirect()->back()
                ->with('success', 'Query has been submit successfully.');
        } else {
            return redirect()->back()
                ->with('error', 'Failed to submit query.');
        }
    }
}