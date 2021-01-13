<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestForm;
use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencies = Agency::all();
        return view('black-end.list',compact('agencies'));
    }


    public function create()
    {
        return view('black-end.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestForm $request)
    {
        $agency = new Agency();
        $agency->fill($request->all());
        $agency->save();
        return redirect()->route('agency.list');
    }


    public function show(Agency $agency)
    {

    }


    public function edit($id)
    {
        $agency = Agency::findorfail($id);
        return view('black-end.edit',compact('agency'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function update(RequestForm $request, $id)
    {
        $agency = Agency::findorfail($id);
        $agency->fill($request->all());
        $agency->save();
        return redirect()->route('agency.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agency = Agency::findorfail($id);
        $agency->delete();
        return redirect()->route('agency.list');
    }
    public function search(Request $request){
        $search = $request->input('search');
        $agencies  = Agency::where('name','like',"%$search%")->orwhere('agency_number','like',"%$search%")->get();
        return view('black-end.list',compact('agencies'));
    }
}
