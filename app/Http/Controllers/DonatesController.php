<?php

namespace App\Http\Controllers;

use App\Donate;
use App\User;
use Illuminate\Http\Request;

class DonatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donors = Donate::all();
        return view('donates.index')->with('donors', $donors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'create page';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donor = new Donate();
        $donor->first_name = $request->get('first_name');
        $donor->last_name = $request->get('last_name');
        $donor->phone = $request->get('phone');
        $donor->email = $request->get('email');
        $donor->blood_type = $request->get('blood_type');
        $donor->location = $request->get('location');

        if ($donor->save())
            return 'saved';
        else
            return 'not saved';

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'show page';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $donor = Donate::find($id);
        $status = $donor->status;

        // Deactivate the status


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
