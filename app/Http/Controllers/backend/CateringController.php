<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\catering;
use Carbon\Carbon;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CateringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catering_info = catering::select(['id','user_id','catering_name','address','phone_no'])->get();
        return view('eventjob.catering.index',compact('catering_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventjob.catering.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        catering::insert([
            'user_id'=>Auth::id(),
            'catering_name'=>$request->catering_name,
            'phone_no'=>$request->phone_no,
            'address'=>$request->address,
            'created_at'=>Carbon::now()
        ]);
        Alert::success('Catering Added Successfully');
        return redirect()->route('catering.index');
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
        $catering_update = catering::find($id);
        return view('eventjob.catering.edit',compact('catering_update'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $catering_update = catering::find($id);
        $catering_update->update([
            'user_id'=>Auth::id(),
            'catering_name'=>$request->catering_name,
            'phone_no'=>$request->phone_no,
            'address'=>$request->address,
            'updated_at'=>Carbon::now()
        ]);
        Alert::success('Catering Updated Successfully');
        return redirect()->route('catering.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $catering_remove = catering::find($id);
        $catering_remove->delete();
        Alert::error('Catering Deleted Successfully');
        return redirect()->route('catering.index');
    }
}
