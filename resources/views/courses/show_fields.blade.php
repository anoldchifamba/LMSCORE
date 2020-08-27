<!-- Id Field -->
{{--<div class="form-group">--}}
{{--    {!! Form::label('id', 'Id:') !!}--}}
{{--    <p>{{ $course->id }}</p>--}}
{{--</div>--}}

<!-- Title Field -->
<div class="form-group col-xs-12">
{{--    {!! Form::label('title', 'Title:') !!}--}}
    <h3>{{ $course->title }}</h3>

    {{--    {!! Form::label('sub_title', 'Sub Title:') !!}--}}
    <p>{{ $course->sub_title }}</p>
    <div class="text-muted">
        @if($course->subscriber_count >0)
            |Students :{{number_format($course->subscriber_count)}}
        @endif
        @if($course->view_count >0)
            |Students viewed :{{number_format($course->view_count)}}

        @endif
    </div>
</div>


<div class="form-group col-md-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ ($course->created_at)->format('h :i a-Dd M Y') }}</p>
</div>
<!-- Created At Field -->

<!-- Discount Price Field -->
<div class="form-group  col-md-6">
    {{--    {!! Form::label('discount_price', 'Discount Price:') !!}--}}
    <h3>$ {{ $course->discount_price }}</h3>
    <strike><p>$ {{ $course->actual_price }}</p></strike>
</div>

<!-- Updated At Field -->
<div class="form-group  col-md-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ ($course->updated_at)->format('h :i a-Dd M Y') }}</p>
</div>

{{--<!-- Actual Price Field -->--}}
{{--<div class="form-group  col-md-6">--}}
{{--    --}}{{--    {!! Form::label('actual_price', 'Actual Price:') !!}--}}
{{--    --}}{{--    <strike><p>$ {{ $course->actual_price }}</p></strike>--}}
{{--</div>--}}

{{--create the pay button--}}
<div class="form-group  col-md-6">
    <a class="btn btn-success btn-lg" href="{{ $course->paynow_url }}"> Buy Course $ {{ $course->discount_price }} </a>
</div>





<!-- Creator Status Field -->
@if(Auth::check() and(Auth::user()->role_id<3 ||Auth::user()->id==$course->user['id'] ))
    <div class="form-group col-md-6">
        {!! Form::label('creator_status', 'Creator Status:') !!}
        <p>@if( $course->creator_status ==1)
               Published
{{--                @if(Auth::user()->role_id<3 )--}}
                    |

                    {!! Form::open(['route' => ['courses.unpublishCourse', $course->id], 'method' => 'post']) !!}
                    <input type="hidden" value="{{$course->id}}" name="course_id"/>
                    {{--                <a class="btn btn-danger btn-xs">Click to Disapprove</a>--}}
                    {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i> Click to Unpublish', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure you want to Unpublished?')"]) !!}
                    {!! Form::close() !!}
{{--                @endif--}}
            @else

                Unpublished
{{--                @if(Auth::user()->role_id<3 )--}}
                    |
                    {!! Form::open(['route' => ['courses.publishCourse', $course->id], 'method' => 'post']) !!}

                    {{--                <a class="btn btn-danger btn-xs">Click to Approve</a>--}}
                    <input type="hidden" value="{{$course->id}}" name="course_id"/>
                    {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i> Click to Publish', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('Are you sure you want to Published?')"]) !!}

                    {!! Form::close() !!}
{{--                @endif--}}
            @endif
        </p>
    </div>

    <!-- Admin Status Field -->
    <div class="form-group col-md-6">
        {!! Form::label('admin_status', 'Admin Status:') !!}
        <p>@if( $course->admin_status ==1)
              Approved
                @if(Auth::user()->role_id<3 )
                    |

                    {!! Form::open(['route' => ['courses.disapprove', $course->id], 'method' => 'post']) !!}
                <input type="hidden" value="{{$course->id}}" name="course_id"/>
{{--                <a class="btn btn-danger btn-xs">Click to Disapprove</a>--}}
                    {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i> Click to Disapprove', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure you want to Disapprove?')"]) !!}
                    {!! Form::close() !!}
                @endif
            @else

               Disapproved
                @if(Auth::user()->role_id<3 )
                |
                {!! Form::open(['route' => ['courses.approve', $course->id], 'method' => 'post']) !!}

{{--                <a class="btn btn-danger btn-xs">Click to Approve</a>--}}
                    <input type="hidden" value="{{$course->id}}" name="course_id"/>
                    {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i> Click to Approve', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('Are you sure you want to Approve?')"]) !!}

                    {!! Form::close() !!}
                @endif
            @endif
        </p>
    </div>
@endif

<!-- User Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('user_id', 'Author:') !!}
    {{--    <p>{{ $course->user_id }}</p>--}}
    <p><a href="/users/{{$course->user['id']}}">{{$course->user['name']}}</a></p>
</div>

<!-- Category Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p><a href="/categories/{{$course->category['id']}}">{{ $course->category['name'] }}</a></p>
</div>







<!-- Description Field -->
<div class="form-group col-md-8">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $course->description }}</p>
</div>

<!-- About Instructor Field -->
<div class="form-group col-md-8">
    {!! Form::label('about_instructor', 'About Instructor:') !!}
    <p>{{ $course->about_instructor }}</p>
</div>

<!-- Playlist Url Field -->
{{--<div class="form-group">--}}
{{--    {!! Form::label('playlist_url', 'Playlist Url:') !!}--}}
{{--    <p>{{ $course->playlist_url }}</p>--}}
{{--</div>--}}

{{--<!-- Tags Field -->--}}
{{--<div class="form-group col-md-8">--}}
{{--    {!! Form::label('tags', 'Tags:') !!}--}}
{{--    <p>{{ $course->tags }}</p>--}}
{{--</div>--}}

{{--<!-- Photo Field -->--}}
{{--<div class="form-group">--}}
{{--    {!! Form::label('photo', 'Photo:') !!}--}}
{{--    <p>{{ $course->photo }}</p>--}}
{{--</div>--}}

<!-- Promo Video Url Field -->
{{--<div class="form-group">--}}
{{--    {!! Form::label('promo_video_url', 'Promo Video Url:') !!}--}}
{{--    <p>{{ $course->promo_video_url }}</p>--}}
{{--</div>--}}


<!-- What Will Students Learn Field -->
<div class="form-group  col-md-8">
    {!! Form::label('what_will_students_learn', 'What Will Students Learn:') !!}
    <p>{{ $course->what_will_students_learn }}</p>
</div>

<!-- Target Students Field -->
<div class="form-group  col-md-8">
    {!! Form::label('target_students', 'Target Students:') !!}
    <p>{{ $course->target_students }}</p>
</div>

<!-- Requirements Field -->
<div class="form-group  col-md-8">
    {!! Form::label('requirements', 'Requirements:') !!}
    <p>{{ $course->requirements }}</p>
</div>



<!-- View Count Field -->
{{--<div class="form-group">--}}
{{--    {!! Form::label('view_count', 'View Count:') !!}--}}
{{--    <p>{{ $course->view_count }}</p>--}}
{{--</div>--}}

<!-- Subscriber Count Field -->
{{--<div class="form-group">--}}
{{--    {!! Form::label('subscriber_count', 'Subscriber Count:') !!}--}}
{{--    <p>{{ $course->subscriber_count }}</p>--}}
{{--</div>--}}

<!-- Deleted At Field -->
{{--<div class="form-group">--}}
{{--    {!! Form::label('deleted_at', 'Deleted At:') !!}--}}
{{--    <p>{{ $course->deleted_at }}</p>--}}
{{--</div>--}}





