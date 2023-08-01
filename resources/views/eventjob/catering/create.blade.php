@extends('layouts.backend.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Catering Information
                            </h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" action="{{ route('catering.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="text-dark">Catering Name</label>
                                    <input type="text" class="form-control input-default"name="catering_name" placeholder="Catering Name">
                                </div>

                                <div class="form-group">
                                    <label for="" class="text-dark">Phone Number</label>
                                    <input type="text" class="form-control input-default"name="phone_no" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-dark">Address</label>
                                    <textarea name="address" id="" cols="30" rows="10" class="form-control" placeholder="Address"></textarea>
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
