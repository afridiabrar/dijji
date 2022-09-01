<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StorePageRequest;
use App\Http\Requests\Admin\UpdatePageRequest;
use App\Models\Page;
use Carbon\Carbon;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function image_upload($file)
    {
        $extension = $file->getClientOriginalExtension(); // getting file extension
        $filename  = 'media-file-' . time() . '.' . $extension;
        $file->move(uploadsDir('/pages'), $filename);
        return $filename;
    }
    public function index()
    {
        try {
            $records = Page::all();
            return view('admin.pages.index', compact('records'));
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageRequest $request)
    {
        try {

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
            Page::create($data);

            return redirect()
                ->route('admin.pages.index')
                ->with('success', 'Page has been added successfully.');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = Page::find($id);
            return view('admin.pages.show', compact('data'));
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $data = Page::find($id);
            return view('admin.pages.edit', compact('data'));
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request, $id)
    {
        try {
            $data = $request->except(
                [
                    '_method',
                    '_token'
                ]
            );

            if ($request->hasFile('media')) {
                $file = $request->file('media');
                $getImage = $this->image_upload($file);
                $data['media'] = $getImage;
            }
            if ($request->hasFile('video')) {
                $file = $request->file('video');
                $getImage = $this->image_upload($file);
                $data['video'] = $getImage;
            }
            if ($request->hasFile('media_2')) {
                $file = $request->file('media_2');
                $getImage = $this->image_upload($file);
                $data['media_2'] = $getImage;
            }
            if ($request->hasFile('media_3')) {
                $file = $request->file('media_3');
                $getImage = $this->image_upload($file);
                $data['media_3'] = $getImage;
            }
            if ($request->hasFile('media_4')) {
                $file = $request->file('media_4');
                $getImage = $this->image_upload($file);
                $data['media_4'] = $getImage;
            }
            Page::where('id', $id)->update($data);

            return redirect()
                ->route('admin.pages.index')
                ->with('success', 'Page has been updated successfully.');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Page::destroy($id);
            return redirect()
                ->route('admin.pages.index')
                ->with('success', 'Page has been deleted successfully.');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }
}
