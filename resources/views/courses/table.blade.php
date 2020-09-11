

<div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
        <tr>
            {{--                <th>User Id</th>--}}
            {{--        <th>Category Id</th>--}}
            <th></th> <th></th>
            {{--        <th>Sub Title</th>--}}
            {{--        <th>Description</th>--}}
            {{--        <th>About Instructor</th>--}}
            {{--        <th>Playlist Url</th>--}}
            {{--        <th>Tags</th>--}}

            {{--        <th>Photo</th>--}}
            {{--        <th>Promo Video Url</th>--}}
            {{--        <th>Creator Status</th>--}}
            {{--        <th>Admin Status</th>--}}
            {{--        <th>What Will Students Learn</th>--}}
            {{--        <th>Target Students</th>--}}
            {{--        <th>Requirements</th>--}}
            <th> Price</th>
{{--            <th>Actual Price</th>--}}
            {{--        <th>View Count</th>--}}
            {{--        <th>Subscriber Count</th>--}}
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                {{--                <td>{{ $course->user_id }}</td>--}}
                {{--            <td>{{ $course->category_id }}</td>--}}
{{--                <td><img src="{{  asset('storage/course_image/9TEr63VcMted5mLf3IcFtxCkqWU2lWE9PReE72u8.jpeg')}}"></td>--}}
                <td><img src="{{  asset('storage/course_image/'.$course->photo)}}" height="90px" width="180px"></td>
                <td> <h4><a href="{{ route('courses.show', [$course->id]) }}" >{{ $course->title }}</a></h4>
                    {{ $course->sub_title }}
                    Instructor {{$course->user['name']}}

                    @if($course->subscriber_count >0)
                        |Students subscribed:{{number_format($course->subscriber_count)}}
                    @endif
                    @if($course->view_count >0)
                        |Students viewed :{{number_format($course->view_count)}}

                    @endif




                </td>
                {{--            <td>{{ $course->description }}</td>--}}
                {{--            <td>{{ $course->about_instructor }}</td>--}}
                {{--            <td>{{ $course->playlist_url }}</td>--}}
                {{--            <td>{{ $course->tags }}</td>--}}
                {{--            <td>{{ $course->photo }}</td>--}}
                {{--            <td>{{ $course->promo_video_url }}</td>--}}
                {{--            <td>{{ $course->creator_status }}</td>--}}
                {{--            <td>{{ $course->admin_status }}</td>--}}
                {{--            <td>{{ $course->what_will_students_learn }}</td>--}}
                {{--            <td>{{ $course->target_students }}</td>--}}
                {{--            <td>{{ $course->requirements }}</td>--}}
                <td><h3>${{ $course->discount_price }}</h3> <br><strike>${{ $course->actual_price }}</strike></td>
                {{--            <td>{{ $course->view_count }}</td>--}}
                {{--            <td>{{ $course->subscriber_count }}</td>--}}
                <td>
                    @if(Auth::check() AND (Auth::user()->role_id < 3 || $course->user_id == Auth::user()->id))
                        {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{--                        <a href="{{ route('courses.show', [$course->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                            <a href="{{ route('courses.edit', [$course->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
