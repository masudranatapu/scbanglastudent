@extends('home')
@section('admin_content')
<div class="col-xl-12 col-lg-12 col-md-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Add Approved by</h3>
                <div class="tab-content">
                    <form action="{{ route('approved_by.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-3">
                            <input type="hidden" name="institute_id" value="{{ Auth::user()->institute->id }}" required>
                            <div class="col-12">
                                <label class="fs-16 mb-2 fw-500" for="approved_by_image">Choose Image</label>
                                <input type="file" class="form-control" name="approved_by_image" id="approved_by_image"
                                    required>
                            </div>
                            <div class="col-12 d-grid pt-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Approved By List</h3>
                <table class="table table-borderless table-striped mb-0 align-middle">
                    <thead>
                        <tr>
                            <th class="text-center" width="80">S.I</th>
                            <th>Image</th>
                            <th class="text-center" width="180">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($approved_by as $gallery)
                        <tr>
                            <td class="text-center"><strong>{{ $loop->index + 1 }}</strong></td>
                            <td>
                                <img class="lazyload img-fit" data-src="{{ asset('public/uploads/'.$gallery->approved_by_image) }}" width="80" height="60" alt="Image">
                            </td>
                            <td class="text-center">
                                <a class="btn btn-danger btn-sm text-white mb-1"
                                    href="{{ route('approved_by.destroy', $gallery->id) }}"
                                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $gallery->id }}').submit();">
                                    <i class="fa fa-trash pe-1"></i>Delete
                                </a>
                                <form id="delete-form-{{ $gallery->id }}"
                                    action="{{ route('approved_by.destroy', $gallery->id) }}" method="POST"
                                    style="display: none;">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection
