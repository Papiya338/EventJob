<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Creativepanel;
use Carbon\Carbon;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;


class CreativeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $creative_info = Creativepanel::select(['id','user_id','name','phone_no','address','panel_type'])->get();
        return view('eventjob.creative_panel.index',compact('creative_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventjob.creative_panel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Creativepanel::insert([
            'user_id'=>Auth::id(),
            'name'=>$request->name,
            'phone_no'=>$request->phone_no,
            'address'=>$request->address,
            'panel_type'=>$request->panel_type,
            'created_at'=>Carbon::now(),
        ]);
        Alert::success('Creative_panel Added Successfully');
        return redirect()->route('creative.index');
        // return view('eventjob.creative_panel.index');
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
        $creative_update = Creativepanel::find($id);
        return view('eventjob.creative_panel.edit',compact('creative_update'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $creative_update = Creativepanel::find($id);
        $creative_update->update([
            'user_id'=>Auth::id(),
            'name'=>$request->name,
            'phone_no'=>$request->phone_no,
            'address'=>$request->address,
            'panel_type'=>$request->panel_type,
            'updated_at'=>Carbon::now(),
        ]);
        Alert::success('Creative_panel Added Successfully');
        return redirect()->route('creative.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $creative_remove = Creativepanel::find($id);
        $creative_remove->delete();
        Alert::error('Creative_panel Deleted Successfully');
        return redirect()->route('creative.index');
    }
}
