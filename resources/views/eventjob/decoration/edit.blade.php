@extends('layouts.backend.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Decoration Update Information
                            </h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" action="{{ route('decoration.update',$decoration_update->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="" class="text-dark">Name</label>
                                    <input type="text" class="form-control input-default"name="name" placeholder="Name" value="{{ $decoration_update->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="" class="text-dark">Phone Number</label>
                                    <input type="text" class="form-control input-default"name="phone_no" placeholder="Phone Number" value="{{ $decoration_update->phone_no }}">
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-dark">Address</label>
                                    <textarea name="address" id="" cols="30" rows="10" class="form-control" placeholder="Address">"{{ $decoration_update->address }}"</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="cars">Decoration_type:</label>
                                    <select name="decoration_type" id="decoration" class="form-control">
                                        <option value="">Select One</option>
                                      <option {{ $decoration_update->decoration_type == 'Stage_setup' ? 'selected' : '' }} value="Stage_setup">Stage_setup</option>
                                      <option {{ $decoration_update->decoration_type == 'Lighting_system' ? 'selected' : '' }} value="Lighting_system">Lighting_system</option>
                                    </select>
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
