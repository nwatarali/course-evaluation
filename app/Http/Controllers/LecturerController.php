<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Lecturer;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function json(Request $request)
    {
        if (isset($request->department_id)) {
            $lecturers = Lecturer::where('department_id', $request->department_id)->get()
                    ->sortBy('last_name')
                    ->map(function ($lecturer) {
                        return array('id' => $lecturer->id, 'name' => $lecturer->getFullName());
                    })
                    ->values()->all();
        } else {
            $lecturers = Lecturer::all()
                    ->sortBy('last_name')
                    ->map(function ($lecturer) {
                        return array('id' => $lecturer->id, 'name' => $lecturer->getFullName());
                    })
                    ->values()->all();
        }

        return response()->json($lecturers);
        
    }
}
