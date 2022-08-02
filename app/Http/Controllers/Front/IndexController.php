<?php

namespace App\Http\Controllers\Front;

use App\Models\Page;

class IndexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Index Action
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

        return view('front.index', compact('cmsPage'));
    }
}
