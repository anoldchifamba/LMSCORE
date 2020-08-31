@extends('layouts.main')

<body>

@include('layouts.header_menu')<!-- .include header menu bar -->


<div class="hero-content-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="hero-content-wrap flex flex-column justify-content-center align-items-start">
                    <header class="entry-header">

                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p>Online Learning , Anywhere, Anytime with Atacademy!</p></div><!-- .entry-content -->

                    <footer class="entry-footer read-more">
                        <a href="#">read more</a>

                    </footer><!-- .entry-footer -->
                </div><!-- .hero-content-wrap -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .hero-content-hero-content-overlay -->
</div><!-- .hero-content -->

</section><!-- .courses-wrap -->


<section  class="featured-courses vertical-column courses-wrap">
    <div class="container">
        <div class="row mx-m-25">
            <div class="col-12 px-25">
                <header style="margin-top: -7%;" class="heading flex flex-wrap justify-content-between align-items-center">
                    <h4 class="entry-title">Featured Courses</h4>
                    <nav class="courses-menu mt-3 mt-lg-0">
                        <ul class="flex flex-wrap justify-content-md-end align-items-center">
                            <li class="active"><a href="#">All</a></li>
                            @foreach($categories as $category)
                                <li> <a  href="/categories/{{ $category->id }}">{{ $category->name }}</a></li>
                            @endforeach

{{--                            <li><a href="#">Business</a></li>--}}
{{--                            <li><a href="#">Design</a></li>--}}
{{--                            <li><a href="#">Web Development</a></li>--}}
{{--                            <li><a href="#">Photography</a></li>--}}
                        </ul>
                    </nav><!-- .courses-menu -->
                </header><!-- .heading -->
            </div><!-- .col -->

            @include('layouts.course_display_data') <!-- include the footer bar -->


            <div class="col-12 px-25 flex justify-content-center">
                <a class="btn" href="{{ url('course') }}">view all courses</a>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .courses-wrap -->

@include('layouts.client_log') <!-- include the footer bar -->

@include('layouts.footer_bar') <!-- include the footer bar -->



</body>
</html>
