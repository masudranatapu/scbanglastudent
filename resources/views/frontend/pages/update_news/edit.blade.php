@extends('home')
@section('admin_content')
<div class="col-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Edit Update News</h3>
                <form action="{{ route('update_news.update',$update_news->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row gy-3">
                        <div class="col-23">
                            <label class="mb-2 fs-16 fw-500" for="UpdateNews">Update News</label>
                            <textarea name="update_news" id="UpdateNews" class="form-control h-auto" cols="30"
                                rows="5">{!! $update_news->update_news ?? '' !!}</textarea>
                        </div>
                        <div class="col-12 d-grid pt-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
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
                            @foreach($all_news as $row)
                            <tr>
                                <td class="text-center"><strong>{{ $loop->index + 1 }}</strong></td>
                                <td><div class="fs-14 mnw-280px">{{ $row->update_news ?? '' }}</div></td>
                                <td class="text-center">
                                    <a class="btn btn-info" href="{{ route('update_news.edit',$row->id) }}">Edit</a>
                                    @if($row->id != $update_news->id)
                                    <a class="btn btn-danger" href="{{ route('update_news.destroy', $row->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $row->id }}').submit();">Delete
                                    </a>
                                    <form id="delete-form-{{ $row->id }}"
                                        action="{{ route('update_news.destroy', $row->id) }}" method="POST"
                                        style="display: none;">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                    @endif
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
