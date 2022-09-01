<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreBenefitRequest;
use App\Http\Requests\Admin\UpdateBenefitsRequest;
use App\Models\Benefit as Benefits;

class BenefitsController extends Controller
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
        $file->move(uploadsDir('/blogs'), $filename);
        return $filename;
    }

    public function index()
    {
        try {
            $records = Benefits::all();
            return view('admin.benefits.index', compact('records'));
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
        return view('admin.benefits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBenefitRequest $request)
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
            Benefits::create($data);

            return redirect()
                ->route('admin.benefits.index')
                ->with('success', 'Benefits has been added successfully.');
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
            $data = Benefits::find($id);
            return view('admin.benefits.show', compact('data'));
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
            $data = Benefits::find($id);
            return view('admin.benefits.edit', compact('data'));
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
    public function update(UpdateBenefitsRequest $request, $id)
    {
        try {
            $data = $request->except(
                [
                    '_method',
                    '_token'
                ]
            );
            if ($request->hasfile('media')) {
                $file = $request->file('media');
                $getImage = $this->image_upload($file);
                $data['media'] = $getImage;
            }

            Benefits::where('id', $id)->update($data);

            return redirect()
                ->route('admin.benefits.index')
                ->with('success', 'Benefits has been updated successfully.');
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
            Benefits::destroy($id);
            return redirect()
                ->route('admin.benefits.index')
                ->with('success', 'Benefit has been deleted successfully.');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }
}
