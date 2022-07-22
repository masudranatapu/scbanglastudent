@extends('home')
@section('admin_content')
<div class="col-xl-12 col-lg-12 col-md-12">
    @include('frontend.partials.flash')
    <div class="row g-4">
        <div class="col-12">
            <div class="p-sm-4 p-3 bg-white shadow-md rounded">
                <h3 class="h3 fw-600 mb-3 text-secondary border-bottom pb-10px">Widget and Notice</h3>
                <form action="{{ route('widget.update',$widget->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div>
                        <div class="row gy-3">
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="widget_one_title">Widget One Title</label>
                                <input type="text" name="widget_one_title" id="widget_one_title" class="form-control"
                                    value="{{ $widget->widget_one_title ?? '' }}">
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="widget_short_description">Widget One Short Description</label>
                                <textarea name="widget_short_description" class="form-control h-auto"
                                    id="widget_short_description" cols="30"
                                    rows="5">{{ $widget->widget_short_description ?? '' }}</textarea>
                            </div>
                            <div class="col-12">
                                <span>Old Photo : </span>
                                <img class="lazyload img-fit"
                                    data-src="{{ asset('public/uploads/'.$widget->widget_one_image) }}" width="80"
                                    height="80" alt="Image">
                            </div>

                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="widget_one_image">Widget One Image</label>
                                <input type="file" name="widget_one_image" id="widget_one_image" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="widget_two_title">Widget Two Title</label>
                                <input type="text" name="widget_two_title" id="widget_two_title" class="form-control"
                                    value="{{ $widget->widget_two_title ?? '' }}">
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="widget_short_two_description">Widget Two Short Description</label>
                                <textarea name="widget_short_two_description" class="form-control h-auto"
                                    id="widget_short_two_description" cols="30"
                                    rows="5">{{ $widget->widget_short_two_description ?? '' }}</textarea>
                            </div>
                            <div class="col-12">
                                <span>Old Photo : </span>
                                <img class="lazyload img-fit"
                                    data-src="{{ asset('public/uploads/'.$widget->widget_two_image) }}" width="80"
                                    height="80" alt="Image">
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="widget_two_image">Widget Two Image</label>
                                <input type="file" name="widget_two_image" id="widget_two_image" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="notice_title">Notice Title</label>
                                <input type="text" name="notice_title" id="notice_title" class="form-control"
                                    value="{{ $widget->notice_title ?? '' }}">
                            </div>
                            <div class="col-12">
                                <label class="fs-16 fw-500 mb-2" for="notice">Notice</label>
                                <input type="text" name="notice" id="notice" class="form-control"
                                    value="{{ $widget->notice ?? '' }}">
                            </div>
                            <div class="col-12 d-grid pt-2">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @endsection
