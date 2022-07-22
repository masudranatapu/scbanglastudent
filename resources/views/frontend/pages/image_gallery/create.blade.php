@extends('home')
@section('admin_content')
<div class="col-xl-12 col-lg-12 col-md-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Update News</h3>
                <div class="tab-content">
                    <form action="{{ route('image_gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-3">
                            <input type="hidden" name="institute_id" value="{{ Auth::user()->institute->id }}" required>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="title">Gallery Title</label>
                                <input class="form-control" type="text" name="title" id="title"
                                    placeholder="Enter Gallery Title">
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="thumbnail_image">Choose Thumbnail</label>
                                <input type="file" class="form-control" name="thumbnail_image" id="thumbnail_image"
                                    required>
                            </div>
                            {{-- <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="gallery">Create Gallery</label>
                                <textarea name="gallery_image" class="form-control h-auto" id="summernote" height="600"
                                    cols="30" rows="5"></textarea>
                            </div> --}}
                            <div class="col-12 d-grid pt-2">
                                <button type="submit pt-3" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
