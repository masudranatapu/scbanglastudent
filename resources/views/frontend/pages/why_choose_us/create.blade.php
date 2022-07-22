@extends('home')
@section('admin_content')
<div class="col-xl-12 col-lg-12 col-md-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Why Choose Us</h3>
                <div class="tab-content">
                    <form action="{{ route('why_choose_us.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-3">
                            <input type="hidden" name="institute_id" value="{{ Auth::user()->institute->id }}">
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="whyChooseUs">Why Choose Us</label>
                                <input type="text" name="why_choose_us" id="whyChooseUs" class="form-control" required>
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
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Why Choose Us</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th class="text-center" width="80">S.I</th>
                                <th>Why Choose Us</th>
                                <th class="text-center" width="120">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($why_choose_us as $row)
                            <tr>
                                <td class="text-center"><strong>{{ $loop->index + 1 }}</strong></td>
                                <td><div class="fs-14 mnw-280px">{{ $row->why_choose_us ?? '' }}</div></td>
                                <td class="text-center">
                                    <a class="btn btn-danger" href="{{ route('why_choose_us.destroy', $row->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $row->id }}').submit();">Delete
                                    </a>
                                    <form id="delete-form-{{ $row->id }}"
                                        action="{{ route('why_choose_us.destroy', $row->id) }}" method="POST"
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
