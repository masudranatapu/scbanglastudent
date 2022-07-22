@extends('home')
@section('admin_content')
<div class="col-xl-12 col-lg-12 col-md-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Edit Notice</h3>
                <form action="{{ route('notice_board.update',$notice->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row gy-3">
                        <div class="col-12">
                            <label class="fs-16 fw-500 mb-2" for="headline">Headline</label>
                            <input value="{{ $notice->headline ?? '' }}" class="form-control" type="text"
                                name="headline" id="headline" placeholder="Enter Notice Headline" required>
                        </div>
                        <div class="col-12">
                            <label class="fs-16 fw-500">Old File : {{ $notice->notice ?? '' }}</label>
                        </div>
                        <div class="col-12">
                            <label class="fs-16 fw-500 mb-2" for="notice">Choose File</label>
                            <input type="file" class="form-control" name="notice" id="notice" required>
                        </div>
                        <div class="col-12 d-grid pt-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
