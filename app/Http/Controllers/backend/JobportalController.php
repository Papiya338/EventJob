<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobportal;
use Carbon\Carbon;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class JobportalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobportal_info = Jobportal::select(['id','user_id','job_title','description','salary_range'])->get();
        return view('eventjob.jobportal.index',compact('jobportal_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventjob.jobportal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Jobportal::insert([
            'user_id'=>Auth::id(),
            'job_title'=>$request->job_title,
            'description'=>$request->description,
            'salary_range'=>$request->salary_range,
            'created_at'=>Carbon::now(),
        ]);
        Alert::success('Job Added Successfully');
        return redirect()->route('job.index');
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
        $job_update = Jobportal::find($id);
        return view('eventjob.jobportal.edit',compact('job_update'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jobportal_update = Jobportal::find($id);
        $jobportal_update ->update([
            'user_id'=>Auth::id(),
            'job_title'=>$request->job_title,
            'description'=>$request->description,
            'salary_range'=>$request->salary_range,
            'updated_at'=>Carbon::now(),
        ]);
        Alert::success('Job Added Successfully');
        return redirect()->route('job.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $job_remove = Jobportal::find($id);
        $job_remove->delete();
        Alert::error('Job Deleted Successfully');
        return redirect()->route('job.index');
    }
}
