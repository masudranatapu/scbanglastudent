@extends('home')
@section('admin_content')
<div class="col-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Edit Event</h3>
                <div class="">
                    <form action="{{ route('recent_event.update',$recent_event->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row gy-3">
                            <input type="hidden" name="institute_id" value="{{ Auth::user()->institute->id }}">
                            <div class="col-12">
                                <label class="fw-500 fs-16 mb-2" for="event_short_description">Event Title</label>
                                <textarea class="form-control" id="event_short_description" cols="30"
                                    name="event_short_description" rows="10"
                                    required>{!! $recent_event->event_short_description ?? '' !!}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="fw-500 fs-16 mb-2" for="event_long_description">Event Description</label>
                                <textarea class="form-control h-auto" id="event_long_description" cols="30"
                                    name="event_long_description" rows="5"
                                    required>{!! $recent_event->event_long_description ?? '' !!}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="fw-500 fs-16 mb-2">Old Thumbnail : </label>
                                <img class="lazyload img-fit"
                                    data-src="{{ asset('public/uploads/'.$recent_event->event_thumbnail) }}" width="80"
                                    height="60" alt="Image">
                            </div>
                            <div class="col-12">
                                <label class="fw-500 fs-16 mb-2" for="event_thumbnail">Thumbnail</label>
                                <input type="file" name="event_thumbnail" id="event_thumbnail" class="form-control">
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
</div>

@endsection
