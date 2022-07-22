@extends('home')
@section('admin_content')
<div class="col-xl-12 col-lg-12 col-md-12">
    @include('frontend.partials.flash')
    <div class="card">
        <div class="card-header"><h3 class="card-title">Edit Image Gallery</h3></div>
        <div class="card-body">
            <div class="card-pay">
                <div class="tab-content">
                    <form action="{{ route('image_gallery.update',$image_gallery->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                    	@csrf
                    	<div class="tab-pane">
                    		<input type="hidden" name="institute_id" value="{{ Auth::user()->institute->id }}" required>
                    		<div class="form-group">
                    			<label for="title">Gallery Title</label>
                    			<input value="{{ $image_gallery->title ?? '' }}" class="form-control" type="text" name="title" id="title" placeholder="Enter Gallery Title">
                    		</div>
	                        <div class="form-group pt-3">
                                <span style="display:block;">Old Image : <img src="{{ asset('public/uploads/'.$image_gallery->thumbnail_image) }}" width="70" alt=""></span>
	                        	<label class="mt-3" for="thumbnail_image">Choose Thumbnail</label> 
	                        	<input type="file" class="form-control" name="thumbnail_image" id="thumbnail_image">
	                        </div>
                            <div class="form-group py-3">
	                        	<label for="gallery">Create Gallery</label> 
                                <textarea name="gallery_image" class="form-control" id="summernote" height="600" cols="30" rows="10">{!! $image_gallery->gallery_image ?? '' !!}</textarea>
	                        </div>
	                        <button type="submit pt-3" class="btn btn-primary">Submit</button>
	                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection