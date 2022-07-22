@extends('home')
@section('admin_content')
<div class="col-xl-12 col-lg-12 col-md-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Post List</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless align-middle fs-16">
                        <thead>
                            <tr>
                                <th class="text-center" width="80">S.I</th>
                                <th class="text-nowrap">Post Thumbnail</th>
                                <th class="text-nowrap">Post Title</th>
                                <th class="text-nowrap">Monthly Tuition Fee</th>
                                <th class="text-nowrap">Max Seat</th>
                                <th class="text-nowrap">Apply Before</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td class="text-center"><strong>{{ $loop->index + 1 }}</strong></td>
                                <td>
                                    <img class="lazyload img-fit" data-src="{{ asset('public/uploads/'.$post->post_thumbnail) }}" width="80" height="60" alt="Image">
                                </td>
                                <td><div class="fs-14 mnw-280px">{{ $post->post_title ?? '' }}</div></td>
                                <td>{{ $post->monthly_tuition_fee ?? '' }}</td>
                                <td>{{ $post->maximum_seat ?? '' }}</td>
                                <td>{{ \Carbon\Carbon::parse($post->apply_before)->diffForHumans() ?? '' }}</td>
                                <td>
                                    <a class="btn btn-success btn-sm text-white mb-1"
                                        href="{{ route('post.edit', $post->id) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm text-white mb-1"
                                        href="{{ route('post.destroy', $post->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $post->id }}').submit();">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form id="delete-form-{{ $post->id }}"
                                        action="{{ route('post.destroy', $post->id) }}" method="POST"
                                        style="display: none;">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>



    @endsection
