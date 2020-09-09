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





<table class="table">

    <tbody>
    @foreach($categories as $category)
        <tr>
            <h2 style="margin-left:5px;">Top Courses in "<a  href="/categories/{{ $category->id }}">{{ $category->name }}</a>"</h2>
        @include('layouts.indexrepair') <!-- include the footer bar -->


        </tr>
    @endforeach
    </tbody>

</table>



@include('layouts.client_log') <!-- include the footer bar -->

@include('layouts.footer_bar') <!-- include the footer bar -->



</body>
</html>
