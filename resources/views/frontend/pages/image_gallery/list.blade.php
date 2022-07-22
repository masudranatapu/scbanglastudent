@extends('home')
@section('admin_content')
<div class="col-xl-12 col-lg-12 col-md-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="card-title">Gallery List</h3>
                <div class="table-responsive">
                    <table class="table table-borderless table-striped align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="text-center" width="80">S.I</th>
                                <th>Title</th>
                                <th>Thumbnail Image</th>
                                <th class="text-center" width="200">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($image_galleries as $gallery)
                            <tr>
                                <td class="text-center"><strong>{{ $loop->index + 1 }}</strong></td>
                                <td>
                                    <img class="lazyload img-fit"
                                        data-src="{{ asset('public/uploads/'.$gallery->thumbnail_image) }}" width="80"
                                        height="60" alt="Image">
                                </td>
                                <td>
                                    <div class="fs-14 mnw-280px">{{ $gallery->title }}</div>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-success btn-sm text-white mb-1"
                                        href="{{ route('image_gallery.edit', $gallery->id) }}">
                                        <i class="fa fa-edit pe-1"></i>Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm text-white mb-1"
                                        href="{{ route('image_gallery.destroy', $gallery->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $gallery->id }}').submit();">
                                        <i class="fa fa-trash pe-1"></i>Delete
                                    </a>
                                    <form id="delete-form-{{ $gallery->id }}"
                                        action="{{ route('image_gallery.destroy', $gallery->id) }}" method="POST"
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
</div>

@endsection
