@extends('home')
@section('admin_content')
<div class="col-xl-12 col-lg-12 col-md-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Create Event</h3>
                <div class="tab-content">
                    <form action="{{ route('recent_event.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-3">
                            <input type="hidden" name="institute_id" value="{{ Auth::user()->institute->id }}">
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="event_short_description">Event Title</label>
                                <textarea class="form-control" id="event_short_description" cols="30"
                                    name="event_short_description" rows="10" required></textarea>
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="event_long_description">Event Description</label>
                                <textarea class="form-control" id="event_long_description" cols="30"
                                    name="event_long_description" rows="10" required></textarea>
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="event_thumbnail">Thumbnail</label>
                                <input type="file" name="event_thumbnail" id="event_thumbnail" class="form-control"
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
    </div>
</div>

@endsection
