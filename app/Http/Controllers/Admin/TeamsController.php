<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreTeamRequest;
use App\Http\Requests\Admin\UpdateTeamRequest;
use App\Models\Teams;

class TeamsController extends Controller
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
        $file->move(uploadsDir('/teams'), $filename);
        return $filename;
    }
    public function index()
    {
        try {
            $records = Teams::all();


            return view('admin.teams.index', compact('records'));
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
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamRequest $request)
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
            } else {
                $data['media'] = 'no-image.jpg';
            }
            Teams::create($data);

            return redirect()
                ->route('admin.teams.index')
                ->with('success', 'Teams has been added successfully.');
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
            $data = Teams::find($id);
            return view('admin.teams.show', compact('data'));
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
            $data = Teams::find($id);
            return view('admin.teams.edit', compact('data'));
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
    public function update(UpdateTeamRequest $request, $id)
    {
        try {
            $data = $request->except(
                [
                    '_method',
                    '_token'
                ]
            );
            $data1 = Teams::find($id);

            if ($request->hasfile('media')) {
                $file = $request->file('media');
                $getImage = $this->image_upload($file);
                $data['media'] = $getImage;
            } else {
                $data['media'] = $data1->media;
            }

            Teams::where('id', $id)->update($data);

            return redirect()
                ->route('admin.teams.index')
                ->with('success', 'Teams has been updated successfully.');
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
            Teams::destroy($id);
            return redirect()
                ->route('admin.teams.index')
                ->with('success', 'Team has been deleted successfully.');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }
}
