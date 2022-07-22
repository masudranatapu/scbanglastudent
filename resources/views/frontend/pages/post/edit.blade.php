@extends('home')
@section('admin_content')
<div class="col-xl-12 col-lg-12 col-md-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Edit Post</h3>
                <div class="tab-content">
                    <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row gy-3">
                            <input type="hidden" name="institute_id" value="{{ Auth::user()->institute->id }}">
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="post_title">Post Title</label>
                                <input type="text" class="form-control" value="{{$post->post_title ?? ''}}"
                                    name="post_title" required>
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="">Old Photo</label> <br>
                                <img class="lazyload img-fit"
                                    data-src="{{ asset('public/uploads/'.$post->post_thumbnail) }}" width="100"
                                    height="70" alt="Image">
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="post_title">Post Thumbnail</label>
                                <input type="file" class="form-control" name="post_thumbnail" required>
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="monthly_tuition_fee">Monthly Tuition Fee</label>
                                <input type="text" class="form-control" name="monthly_tuition_fee"
                                    value="{{ $post->monthly_tuition_fee ?? '' }}" required>
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="class">Select Class</label>
                                <select name="class_id" id="class" class="form-control" required>
                                    @foreach(App\Models\Classes::orderByDesc('id')->get() as $class)
                                    <option value="{{ $class->id }}" @if($class->id == $post->class_id) selected
                                        @endif>{{ $class->class_name ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="shift">Select Shift</label>
                                <select name="shift_id" id="shift" class="form-control" required>
                                    @foreach(App\Models\Shift::orderByDesc('id')->get() as $shift)
                                    <option value="{{ $shift->id }}" @if($shift->id == $post->shift_id) selected
                                        @endif>{{ $shift->name ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="group">Select Group</label>
                                <select name="group_id" id="group" class="form-control" required>
                                    <option value="0">None</option>
                                    @foreach(App\Models\Group::orderByDesc('id')->get() as $group)
                                    <option value="{{ $group->id }}" @if($group->id == $post->group_id) selected @endif
                                        >{{ $group->group_name ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="maximum_seat">Maximum Seat</label>
                                <input type="text" class="form-control" name="maximum_seat"
                                    value="{{ $post->maximum_seat ?? '' }}" required>
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="gender">Select Gender</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value="male" @if($post->gender == 'male') selected @endif>Male</option>
                                    <option value="female" @if($post->gender == 'female') selected @endif>Female
                                    </option>
                                    <option value="both" @if($post->gender == 'both') selected @endif>Both</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="apply_before">Apply Before</label>
                                <input type="datetime-local" id="apply_before" value="{{ $post->apply_before ?? '' }}"
                                    name="apply_before" class="form-control" required>
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="description">Description</label>
                                <textarea class="form-control h-auto" cols="30" name="description" rows="5"
                                    required>{{ $post->description ?? '' }}</textarea>
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
