<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venue;
use Carbon\Carbon;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $venue_info = Venue::select(['id','user_id','venue_name','address','location','venue_type'])->get();
        return view('eventjob.venue.index',compact('venue_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventjob.venue.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Venue::insert([
            'user_id'=>Auth::id(),
            'venue_name'=>$request->venue_name,
            'address'=>$request->address,
            'location'=>$request->location,
            'venue_type'=>$request->venue_type,
            'created_at'=>Carbon::now(),
        ]);
        Alert::success('Venue Added Successfully');
        return redirect()->route('venue.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $venue_update = Venue::find($id);
        return view('eventjob.venue.edit',compact('venue_update'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $venue_update = Venue::find($id);
        $venue_update->update([
            'user_id'=>Auth::id(),
            'venue_name'=>$request->venue_name,
            'address'=>$request->address,
            'location'=>$request->location,
            'venue_type'=>$request->venue_type,
            'updated_at'=>Carbon::now(),
        ]);
        Alert::success('Venue Updated Successfully');
        return redirect()->route('venue.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $venue_remove = Venue::find($id);
        $venue_remove->delete();
        Alert::error('Venue Deleted Successfully');
        return redirect()->route('venue.index');
    }
}
