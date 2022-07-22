@extends('frontend.master')
@section('content')

<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <!--Add lists-->
                <div class="card mb-lg-0">
                    <div class="card-body">
                        <div class="item2-gl">
                            <div class="item2-gl-nav d-flex">
                                <h6 class="mb-0 text-center mt-2">
                                    Featured Institute
                                </h6>
                            </div>
                            <div class="tab-content">
                            <div class="row">
                                @foreach($all_featured_institute as $institute)
                                <div class="col-xl-3 col-md-4 mt-3 p-0" style="border:1px solid rgba(128,137,150,0.2);height: fit-content;">
                                    <div class="job-card"  style="background-color:#f5f5f5;padding:15px;">
                                        <div class="row">
                                            <div class="col-4">
                                                    <div  style="padding:18%;margin-top: 10px;background:#fff;border-radius:5px; box-shadow:0 1px 3px rgb(0 0 0 / 35%);">
                                                         <img src="{{asset('public/uploads/'.$institute->logo)}}" width="90%" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-8" style="padding-left:0;">
                                                <div class="company-title-box">
                                                    <h4 class="card-title mb-1" style="font-size:16px !important;font-weight: bold;"><a href="{{ route('institute_details',$institute->institute_slug) }}">{{$institute->institute_name ?? ''}}</a> </h4>
                                                   
                                                </div>
                                                <div>
                                                    @foreach($institute->post as $post)
                                                        <a href="" class="font-size-13" style="color:#525252;"><i class="fa fa-caret-right m-2"></i>{{$post->class->class_name.'-'. $institute->sub_institute_type->sub_institute_type }} </a> <br>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="card-foot">
                                                <div class="row mt-2">
                                                    <div class="col-6">
                                                         <span style="font-size:13px;"> 
                                                            Location Updated
                                                         </span>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="{{ route('institute_details',$institute->institute_slug) }}" style="font-size:10px;">আরো জানতে ক্লিক করুন  </a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end job-card -->
                                </div>
                                @endforeach
                            </div>
                            </div>
                        </div>
                        <div class="center-block text-center mt-3">
                            <ul class="pagination mb-0">
                                {{ $all_featured_institute->links() ?? '' }}
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/Add lists-->
            </div>
        </div>
    </div>
</section>


@endsection