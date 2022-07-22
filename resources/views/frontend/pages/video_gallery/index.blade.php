@extends('home')
@section('admin_content')
<div class="col-12">
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
                                <th>Gallery Short Description</th>
                                <th>Gallery URL</th>
                                <th class="text-center" width="130">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($video_galleries as $video_gallery)
                            <tr>
                                <td class="text-center" width="80"><strong>{{ $loop->index + 1 }}</strong></td>
                                <td>
                                    <div class="fs-14">
                                        {{ $video_gallery->video_link ?? '' }}
                                    </div>
                                </td>
                                <td>
                                    <div class="fs-14 mnw-280px">{{ $video_gallery->gallery_short_description ?? '' }}
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-success btn-sm text-white mb-1"
                                        href="{{ route('video_gallery.edit', $video_gallery->id) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm text-white mb-1"
                                        href="{{ route('video_gallery.destroy', $video_gallery->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $video_gallery->id }}').submit();">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form id="delete-form-{{ $video_gallery->id }}"
                                        action="{{ route('video_gallery.destroy', $video_gallery->id) }}" method="POST"
                                        style="display: none;">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $video_galleries->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
