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
                            <form method="post" action="{{ route('job.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="text-dark"> Job_title</label>
                                    <input type="text" class="form-control input-default" name="job_title" placeholder=" Job_title">
                                </div>


                                <div class="form-group">
                                    <label for="" class="text-dark">Description</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-dark">Salary_range </label>
                                    <input type="text" class="form-control input-default"name="salary_range" placeholder="Salary_range">
                                </div>
                                <button type="submit" class="btn btn-dark">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
