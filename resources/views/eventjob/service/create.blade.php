@extends('layouts.backend.app')
@section('content')
@push('admin.css')
  <style>
     #container{
        width: 1000px;
        margin: 20px auto;

        .ck-editor__editable[role="textbox"]{

             /*editing area*/
                 min-height: 200px:
        }
        .ck-content .image{
            /*block image*/
            max-width: 80%;
            margin: 20px auto;
        }

     }
  </style>

@endpush
<div class="content-body">
    <div class="container-fluid">
       <div class="row">
          <div class="col-xxl-12">
             <div class="card">
                <div class="card-header">
                   <h4 class="card-title">Services Information</h4>
                </div>
                <div class="card-body">
                   <div class="basic-form">
                      <form method="post" action="{{ route('service.store') }}">
                        @csrf
                         <div class="form-group">
                            <label for="" class="text-dark">Vanue Name</label>
                            <select name="vanue_id" class="form-control input-rounded @error('vanue_id') is-invalid @enderror">
                                <option value="">Select One</option>
                                @foreach ($vanue_list as $vanue)
                                <option value="{{ $vanue->id }}">{{ $vanue->venue_name }}</option>
                                @endforeach
                            </select>

                         </div>
                         <div class="form-group">
                            <label for="" class="text-dark">Services Info</label>
                            <textarea name="service_listname" id="service_list_name" cols="30" rows="10" class="text-dark form-control @error('service_list_name') is-invalid @enderror" placeholder=""></textarea>

                         </div>
                         <div class="form-group">
                           <label for="" class="text-dark">Price</label>
                           <input type="text" name="service_price" class="form-control input-rounded @error('service_price') is-invalid @enderror" placeholder="Service Price">

                        </div>
                         <div class="form-group">
                           <label for="" class="text-dark">Services Type</label>
                           <select name="service_type" id="" class="form-control input-rounded @error('service_type') is-invalid @enderror">
                               <option value="">Select</option>
                               <option value="Basic">Basic</option>
                               <option value="Standard">Standard</option>
                               <option value="Premium">Premium</option>
                           </select>

                        </div>
                         <button type="submit" class="btn btn-secondary">Save</button>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection

@push('admin.js')
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#service_list_name' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush

