<?php

namespace App\Http\Controllers\Front;

use App\Models\Careers;
use App\Models\Faq;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }






    public function index()
    {
        $cmsPage = Page::where('slug', 'home')->first();

        return view('front.index', compact('cmsPage'));
    }



    public function page(Request $request, $slug = '')
    {
        $cmsPage = Page::where('slug', $slug)->first();
        if ($cmsPage) {
            $faqs = Faq::where('status', 1)->get();
            $careers = Careers::where('status', 1)->paginate(10);


            return view('front.' . $cmsPage->page_name, compact('cmsPage', 'faqs', 'careers'));
        }
        return '404 Page Not Found ';
    }
}
