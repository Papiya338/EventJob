@extends('layouts.backend.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Job_Portal Information
                            </h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" action="{{ route('job.update',$job_update->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="" class="text-dark"> Job_title</label>
                                    <input type="text" class="form-control input-default" name="job_title" placeholder=" Job_title" value="{{ $job_update->job_title }}">
                                </div>


                                <div class="form-group">
                                    <label for="" class="text-dark">Description</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description">"{{ $job_update->job_title }}"</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-dark">Salary_range </label>
                                    <input type="text" class="form-control input-default"name="salary_range" placeholder="Salary_range" value="{{ $job_update->salary_range }}">
                                </div>
                                <button type="submit" class="btn btn-dark">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
