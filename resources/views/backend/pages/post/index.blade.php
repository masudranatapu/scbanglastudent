
@extends('backend.layouts.master')

@section('title')
Admins - Post
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
                <h4 class="page-title pull-left">Post</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><span>All Post</span></li>
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
                    <h4 class="header-title float-left">Post List</h4>
                    <p class="float-right mb-2">
                    </p>
                    <div class="clearfix"></div>
                    <div class="data-tables">
                        @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th width="5%">Sl</th>
                                    <th width="10%">Post Title</th>
                                    <th width="10%">Institute</th>
                                    <th width="10%">Monthly Tuition Fee</th>
                                    <th width="10%">Apply Before</th>
                                    <th width="10%">Approved By</th>
                                    <th width="10%">Featured</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($posts as $post)
                               <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $post->post_title ?? '' }}</td>
                                    <td>{{ $post->institute->institute_name ?? '' }}</td>
                                    <td>{{ $post->monthly_tuition_fee ?? '' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($post->apply_before)->diffForHumans() ?? '' }}</td>
                                    <td>{{ $post->admin->name ?? '' }}</td>
                                    <td>
                                        @if (Auth::guard('admin')->user()->can('post.edit'))
                                            @if($post->featured == NULL)
                                            <a class="btn btn-success text-white" href="{{ route('admin.post.top_active',['post_id' => $post->id]) }}">Active</a>
                                            @else
                                            <a class="btn btn-warning text-white" href="{{ route('admin.post.top_deactive',['post_id' => $post->id]) }}">Deactive</a>
                                            @endif
                                        @endif     
                                    </td>
                                    <td>
                                         @if (Auth::guard('admin')->user()->can('post.edit'))
                                            <a class="btn btn-success text-white" href="{{ route('admin.post.edit', $post->id) }}">Edit</a>
                                        @endif
                                        @if (Auth::guard('admin')->user()->can('post.delete'))
                                        <a class="btn btn-danger text-white" href="{{ route('post.destroy', $post->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $post->id }}').submit();">
                                            Delete
                                        </a>
                                        <form id="delete-form-{{ $post->id }}" action="{{ route('post.destroy', $post->id) }}" method="POST" style="display: none;">
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