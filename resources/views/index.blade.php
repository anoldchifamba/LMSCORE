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

<div class="icon-boxes">
    <div class="container-fluid">
        <div class="flex flex-wrap align-items-stretch">
            <div class="icon-box">
                <div class="icon">
                    <span class="ti-user"></span>
                </div><!-- .icon -->

                <header class="entry-header">
                    <h2 class="entry-title">Learn From The Experts</h2>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <p  align="justify">Learning with Atacademy offer a scope of courses across Web Development, Security and that's only the tip of the iceberg, conveyed on the web so you can realize when you like.</p>
                </div><!-- .entry-content -->

                <footer class="entry-footer read-more">
                    <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>
                </footer><!-- .entry-footer -->
            </div><!-- .icon-box -->

            <div class="icon-box">
                <div class="icon">
                    <span class="ti-folder"></span>
                </div><!-- .icon -->

                <header class="entry-header">
                    <h2 class="entry-title">Book Library & Store</h2>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <p  align="justify">Shop our carefully curated collection of books,pdf, stationery and much more and give back to your community.</p>
                </div><!-- .entry-content -->

                <footer class="entry-footer read-more">
                    <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>
                </footer><!-- .entry-footer -->
            </div><!-- .icon-box -->

            <div class="icon-box">
                <div class="icon">
                    <span class="ti-book"></span>
                </div><!-- .icon -->

                <header class="entry-header">
                    <h2 class="entry-title">Best Course Online</h2>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <p  align="justify">Atacademy online courses carries chance to seek after your fantasies through a program that was adaptable and helpful for your timetable. </p>
                </div><!-- .entry-content -->

                <footer class="entry-footer read-more">
                    <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>
                </footer><!-- .entry-footer -->
            </div><!-- .icon-box -->

            <div class="icon-box">
                <div class="icon">
                    <span class="ti-world"></span>
                </div><!-- .icon -->

                <header class="entry-header">
                    <h2 class="entry-title">Best Industry Leaders</h2>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <p  align="justify"> Learn on your terms with lifetime course access and the Atacademy mobile app..</p>
                </div><!-- .entry-content -->

                <footer class="entry-footer read-more">
                    <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>
                </footer><!-- .entry-footer -->
            </div><!-- .icon-box -->
        </div><!-- .row -->
    </div><!-- .container-fluid -->
</div><!-- .icon-boxes -->
</section><!-- .courses-wrap -->


<section class="featured-courses vertical-column courses-wrap">
    <div class="container">
        <div class="row mx-m-25">
            <div class="col-12 px-25">
                <header class="heading flex flex-wrap justify-content-between align-items-center">
                    <h2 class="entry-title">Featured Courses</h2>
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
