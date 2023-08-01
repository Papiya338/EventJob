<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Decoration;
use Carbon\Carbon;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
class DecorationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $decoration_info = Decoration::select(['id','user_id','name','address','phone_no','decoration_type'])->get();
        return view('eventjob.decoration.index',compact('decoration_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventjob.decoration.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Decoration::insert([
            'user_id'=>Auth::id(),
            'name'=>$request->name,
            'address'=>$request->address,
            'phone_no'=>$request->phone_no,
            'decoration_type'=>$request->decoration_type,
            'created_at'=>Carbon::now()
        ]);
        Alert::success('Decoration Added Successfully');
        return redirect()->route('decoration.index');
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
        $decoration_update = Decoration::find($id);
        return view('eventjob.decoration.edit',compact('decoration_update'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $decoration_update = Decoration::find($id);
        $decoration_update->update([
            'user_id'=>Auth::id(),
            'name'=>$request->name,
            'phone_no'=>$request->phone_no,
            'address'=>$request->address,
            // 'decoration_type'=>$request->decoration_type,
            'updated_at'=>Carbon::now()

        ]);
        Alert::success('Decoration AdUpdatedded Successfully');
        return redirect()->route('decoration.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $decoration_remove = Decoration::find($id);
        $decoration_remove->delete();
        Alert::error('Decoration Deleted Successfully');
        return redirect()->route('decoration.index');
    }
}
