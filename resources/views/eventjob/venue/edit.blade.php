@extends('layouts.backend.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Venue Update Information
                            </h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" action="{{ route('venue.update',$venue_update->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="" class="text-dark">Venue_Name</label>
                                    <input type="text" class="form-control input-default"name="venue_name" placeholder=" Venue_Name" value="{{ $venue_update->venue_name }}">
                                </div>

                                <div class="form-group">
                                    <label for="" class="text-dark">Address</label>
                                    <textarea name="address" id="" cols="30" rows="10" class="form-control" placeholder="Address">"{{ $venue_update->address }}"</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-dark">Location</label>
                                    <input type="text" class="form-control input-default"name="location" placeholder=" Location" value="{{ $venue_update->location }}">
                                </div>
                                <div class="form-group">
                                    <label for="cars">Venue_type:</label>
                                    <select name="venue_type" id="venue" class="form-control">
                                        <option value="">Select One</option>
                                      <option  {{ $venue_update->venue_type == 'restaurant' ? 'selected' : '' }}  value="restaurant">Restaurant</option>
                                      <option {{ $venue_update->venue_type == 'convention_hall' ? 'selected' : '' }} value="convention_hall">Convention_Hall</option>
                                      <option {{ $venue_update->venue_type == 'preferabl_area' ? 'selected' : '' }} value="preferabl_area">Preferabl_Area</option>
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
