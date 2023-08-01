@extends('layouts.backend.app')
@section('content')
@push('admin.css')
<link href="{{ asset('backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endpush
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Creative_Panel Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display text-dark" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Phone no</th>
                                        <th>Panel_type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($creative_info as $creative)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $creative->name }}</td>
                                        <td>{{ $creative->address }}</td>
                                        <td>{{ $creative->phone_no }}</td>
                                        <td>{{ $creative->panel_type }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-dark" href="{{ route('creative.edit',$creative->id)}}"> Edit</a>
                                            <form action="{{ route('creative.destroy',$creative->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm btn-icon-text">Delete <i class="mdi mdi-delete btn-icon-prepend"></i> </button>

                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Phone no</th>
                                        <th>Panel_type</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('admin.js')
<script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins-init/datatables.init.js') }}"></script>
@endpush
