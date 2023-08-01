@extends('layouts.backend.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Venue Information
                            </h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" action="{{ route('venue.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="text-dark">Venue_Name</label>
                                    <input type="text" class="form-control input-default"name="venue_name" placeholder=" Venue_Name">
                                </div>

                                <div class="form-group">
                                    <label for="" class="text-dark">Address</label>
                                    <textarea name="address" id="" cols="30" rows="10" class="form-control" placeholder="Address"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-dark">Location</label>
                                    <input type="text" class="form-control input-default"name="location" placeholder=" Location">
                                </div>
                                <div class="form-group">
                                    <label for="cars">Venue_type:</label>
                                    <select name="venue_type" id="venue" class="form-control">
                                        <option value="">Select One</option>
                                      <option value="restaurant">Restaurant</option>
                                      <option value="convention_hall">Convention_Hall</option>
                                      <option value="preferabl_area">Preferabl_Area</option>
                                    </select>
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
