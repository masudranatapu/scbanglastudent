@extends('home')
@section('admin_content')
<div class="col-xl-12 col-lg-12 col-md-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Event List</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless align-middle fs-16">
                        <thead>
                            <tr>
                                <th class="text-center" width="80">S.I</th>
                                <th>Event Title</th>
                                <th>Event Description</th>
                                <th class="text-center" width="200">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recent_events as $recent_event)
                            <tr>
                                <td class="text-center" width="80"><strong>{{ $loop->index + 1 }}</strong></td>
                                <td>
                                    <img class="lazyload img-fit" data-src="{{ asset('public/uploads/'.$recent_event->event_thumbnail) }}" width="80" height="60"
                                        alt="Image">
                                </td>
                                <td><div class="fs-16 fw-500 mnw-280px">{{ \Illuminate\Support\Str::limit($recent_event->event_short_description,50) ?? '' }}</div></td>
                                <td class="text-center" width="200">
                                    <a class="btn btn-success btn-sm text-white lh-1-5"
                                        href="{{ route('recent_event.edit', $recent_event->id) }}">
                                        <i class="fa fa-edit pe-1"></i>Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm text-white lh-1-5"
                                        href="{{ route('recent_event.destroy', $recent_event->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $recent_event->id }}').submit();">
                                        <i class="fa fa-trash pe-1"></i>Delete
                                    </a>
                                    <form id="delete-form-{{ $recent_event->id }}"
                                        action="{{ route('recent_event.destroy', $recent_event->id) }}" method="POST"
                                        style="display: none;">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $recent_events->links() }}
                </div>
            </div>
        </div>
    </div>



    @endsection
