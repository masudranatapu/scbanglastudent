@extends('home')
@section('admin_content')
<div class="col-xl-12 col-lg-12 col-md-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Update News</h3>
                <div class="tab-content">
                    <form action="{{ route('update_news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-3">
                            <input type="hidden" name="institute_id" value="{{ Auth::user()->institute->id }}">
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="UpdateNews">Update News</label>
                                <textarea name="update_news" id="UpdateNews" class="form-control h-auto" cols="30"
                                    rows="5"></textarea>
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
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Update News</h3>
                <div class="table-responsive">
                    <table class="table table-borderless table-striped align-middle">
                        <thead>
                            <tr>
                                <th class="text-center" width="80">S.I</th>
                                <th>Update News</th>
                                <th class="text-center" width="180">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($update_news as $row)
                            <tr>
                                <td class="text-center"><strong>{{ $loop->index + 1 }}</strong></td>
                                <td><div class="mnw-280px fs-14">{{ $row->update_news ?? '' }}</div></td>
                                <td class="text-center">
                                    <a class="btn my-1 btn-info" href="{{ route('update_news.edit',$row->id) }}">Edit</a>
                                    <a class="btn my-1 btn-danger" href="{{ route('update_news.destroy', $row->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $row->id }}').submit();">Delete
                                    </a>
                                    <form id="delete-form-{{ $row->id }}"
                                        action="{{ route('update_news.destroy', $row->id) }}" method="POST"
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
