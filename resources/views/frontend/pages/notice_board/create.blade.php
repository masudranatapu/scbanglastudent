@extends('home')
@section('admin_content')
<div class="col-xl-12 col-lg-12 col-md-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Add Notice</h3>
                <div class="tab-content">
                    <form action="{{ route('notice_board.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-12">
                                <label class="fs-16 mb-2 fw-500" for="headline">Headline</label>
                                <input class="form-control" type="text" name="headline" id="headline"
                                    placeholder="Enter Notice Headline" required>
                            </div>
                            <div class="col-12">
                                <label class="fs-16 mb-2 fw-500" for="notice">Choose File</label>
                                <input type="file" class="form-control" name="notice" id="notice" required>
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
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Notice List</h3>
                <div class="table-responsive">
                    <table class="table table-borderless align-middle table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" width="80">S.I</th>
                                <th>Headline</th>
                                <th>Notice File</th>
                                <th class="text-center" width="180">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(App\NoticeBoard::where('institute_id',Auth::user()->institute->id)->orderByDesc('id')->get()
                            as $notice)
                            <tr>
                                <td class="text-center"><strong>{{ $loop->index + 1 }}</strong></td>
                                <td><div class="fs-14 mnw-280px">{{ $notice->headline ?? '' }}</div></td>
                                <td>
                                    <a href="{{ url('/notice_board/download/'.$notice->notice) }}">
                                        {{ $notice->notice ?? '' }}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a class="btn my-1 btn-info" href="{{ route('notice_board.edit',$notice->id) }}">Edit</a>
                                    <a class="btn my-1 btn-danger d-inline-flex btn-sm text-white"
                                        href="{{ route('notice_board.destroy', $notice->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $notice->id }}').submit();">Delete
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                    <form id="delete-form-{{ $notice->id }}"
                                        action="{{ route('notice_board.destroy', $notice->id) }}" method="POST"
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
