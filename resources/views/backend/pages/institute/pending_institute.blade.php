
@extends('backend.layouts.master')

@section('title')
Admins - Pending Institute
@endsection

@section('styles')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection


@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Institute</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><span>All Institute</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title float-left">Institute List</h4>
                    <p class="float-right mb-2">
                    </p>
                    <div class="clearfix"></div>
                    <div class="data-tables">
                        @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th width="5%">Sl</th>
                                    <th width="10%">Institute Name</th>
                                    <th width="10%">Institute Type</th>
                                    <th width="10%">Sub Institute Type</th>
                                    <th width="10%">Division</th>
                                    <th width="10%">District</th>
                                    <th width="10%">Location</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($pending_institute as $institute)
                               <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $institute->institute_name ?? '' }}</td>
                                    <td>{{ $institute->institute_type->institute_type ?? '' }}</td>
                                    <td>{{ $institute->sub_institute_type->sub_institute_type ?? '' }}</td>
                                    <td>{{ $institute->division->division_name ?? '' }}</td>
                                    <td>{{ $institute->district->district_name ?? '' }}</td>
                                    <td>{{ $institute->location ?? '' }}</td>
                                    <td>
                                         @if (Auth::guard('admin')->user()->can('institute.approve'))
                                            <a class="btn btn-info text-white" href="{{ route('admin.institute.approve',['institute_id' => $institute->id]) }}">Approve</a>
                                        @endif
                                        @if (Auth::guard('admin')->user()->can('institute.delete'))
                                        <a class="btn btn-danger text-white" href="{{ route('admin.institute.destroy', $institute->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $institute->id }}').submit();">
                                            Delete
                                        </a>
                                        <form id="delete-form-{{ $institute->id }}" action="{{ route('admin.institute.destroy', $institute->id) }}" method="POST" style="display: none;">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
    </div>
</div>
@endsection


@section('scripts')
     <!-- Start datatable js -->
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
     <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
     
     <script>
         /*================================
        datatable active
        ==================================*/
        if ($('#dataTable').length) {
            $('#dataTable').DataTable({
                responsive: true
            });
        }

     </script>
@endsection