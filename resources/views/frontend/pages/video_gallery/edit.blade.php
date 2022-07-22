@extends('home')
@section('admin_content')
<div class="col-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Edit Video</h3>
                <div class="tab-content">
                    <form action="{{ route('video_gallery.update',$video_gallery->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row gy-3">
                            <input type="hidden" name="institute_id" value="{{ Auth::user()->institute->id }}">
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="gallery_short_description">Gallery Short
                                    Description</label>
                                <textarea class="form-control h-auto" id="gallery_short_description" cols="30"
                                    name="gallery_short_description" rows="5"
                                    required>{!! $video_gallery->gallery_short_description ?? '' !!}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="gallery_long_description">Gallery Long
                                    Description</label>
                                <textarea class="form-control h-auto" id="gallery_long_description" cols="30"
                                    name="gallery_long_description" rows="5"
                                    required>{!! $video_gallery->gallery_long_description ?? '' !!}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="video_link">Video URL(Youtube)</label>
                                <input type="text" name="video_link" id="video_link"
                                    value="{{ $video_gallery->video_link ?? '' }}" class="form-control" required>
                            </div>
                            <div class="col-12 d-grid pt-2">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
