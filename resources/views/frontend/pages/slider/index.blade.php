@extends('home')
@section('admin_content')
<div class="col-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Add Slider</h3>
                <div class="">
                    <div class="">
                        <div class="fs-16">
                            <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-3">
                                    <input type="hidden" name="institute_id" value="{{ Auth::user()->institute->id }}"
                                        required>
                                    <div class="col-12">
                                        <label class="mb-2 fs-16 fw-500" for="slider_title">Slider Title</label>
                                        <input class="form-control" type="text" name="slider_title" id="slider_title"
                                            placeholder="Enter Slider Title" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="mb-2 fs-16 fw-500" for="slider_thumbnail">Choose Image</label>
                                        <input type="file" class="form-control" name="slider_thumbnail"
                                            id="slider_thumbnail" required>
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
        <div class="col-12">
            <div class="bg-white p-sm-4 p-3 shadow-md rounded">
                <h3 class="h3 mb-3 text-secondary fw-600 pb-10px border-bottom">Slider List</h3>
                <div class="">
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless align-middle fs-16">
                            <thead>
                                <tr>
                                    <th class="text-center" width="80">S.I</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th class="text-center" width="80">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(App\Models\Slider::where('institute_id',Auth::user()->institute->id)->orderByDesc('id')->get()
                                as $slider)
                                <tr>
                                    <td class="text-center" width="80"><strong>{{ $loop->index + 1 }}</strong></td>
                                    <td>
                                        <img class="lazyload img-fit" data-src="{{ asset('public/uploads/'.$slider->slider_thumbnail) }}" width="80" height="60"
                                            alt="Slide Image">
                                    </td>
                                    <td><div class="fs-16 fw-500 mnw-280px">{{ $slider->slider_title }}</div></td>
                                    <td class="text-center" width="80">
                                        <a class="btn btn-danger btn-sm text-white lh-1-5"
                                            href="{{ route('slider.destroy', $slider->id) }}"
                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $slider->id }}').submit();">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                        <form id="delete-form-{{ $slider->id }}"
                                            action="{{ route('slider.destroy', $slider->id) }}" method="POST"
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
</div>



@endsection
