@foreach($courses as $course)
    <a href="/courses/{{ $course->id }}">
<div class="col-12 col-md-6 col-lg-4 px-25" style="margin-top: -4%;" onclick="location.href='/courses/{{ $course->id }}';" >
    <div class="course-content"  style=" border-radius: 5px;border: 3px solid lightgreen;padding: 10px; ">
        <figure class="course-thumbnail">
            <a >  <img src="{{  asset('storage/course_image/'.$course->photo)}}"  style="height: 150px; " ></a>
        </figure><!-- .course-thumbnail -->

        <div class="course-content-wrap" >
            <header class="entry-header">
                <h2 class="entry-title"><a >{{  str_limit($course->title ,$limit=40 ,$end='...')}}</a></h2>

                <div class="entry-meta flex align-items-center">
                    <div class="course-author"><a href="#">{{ $course->user['name'] }} </a></div>

                    <div class="course-date">{{ $course->created_at->format('h :i a-Dd M Y') }}</div>
                </div><!-- .course-date -->
            </header><!-- .entry-header -->

{{--            <footer class="entry-footer flex justify-content-between align-items-center">--}}

                <div class="course-ratings flex  align-items-center">
                    Ratings :
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o"></span>

                    <span class="course-ratings-count">(4 votes)</span>
                </div>

            <div class="course-ratings flex  align-items-center">
                Students viewed :
                <span class="course-ratings-count">({{  $course->view_count }})</span>
            </div>

                <div class="btn btn-success btn-lg align-items-center" >
                    By Course:       $  {{  $course->discount_price }} <small class="text-muted"> <strike>{{  $course->actual_price }} </strike></small>
                </div><!-- .course-cost -->

                <!-- .course-ratings -->
{{--            </footer><!-- .entry-footer -->--}}
        </div><!-- .course-content-wrap -->
    </div><!-- .course-content -->
</div><!-- .col -->
    </a>
@endforeach




