<?php

namespace App\Http\Controllers\Front;

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

            return view('front.' . $cmsPage->page_name, compact('cmsPage'));
        }
        return '404 Page Not Found ';
    }
}
