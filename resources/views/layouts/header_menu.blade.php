

<div class="hero-content">
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">

                        <h6 class="site-title"><a href="{{ url('index') }}" rel="home"><img src="{{ asset('log/logo.png') }}" height="50px" alt=""></a></h6>

                        <div class="header-bar-text lg-flex align-items-center">

                        </div><!-- .header-bar-text -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="header-bar-search">
                            <form class="flex align-items-stretch">
                                <div class="dropdown">
                                    <button style="background-color: white;" class="btn " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-certificate"></i> : Courses
                                    </button>
                                    <div  class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @foreach($courses as $course)
                                            {{--                                            @if($category->id ==$course->category_id)--}}
                                            <a class="dropdown-item" href="/courses/{{ $course->id }}
                                                ">{{ $course->title }}</a>
                                            {{--                                            @endif--}}
                                        @endforeach
                                    </div>
                                </div>
                                <div class="dropdown" >
                                    <button style="background-color: white;" class="btn " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-filter"></i> :  Categories
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @foreach($categories as $category)
                                            {{--                                            @if($category->id ==$course->category_id)--}}
                                            <a class="dropdown-item" href="/categories/{{ $category->id }}
                                                ">{{ $category->name }}</a>
                                            {{--                                            @endif--}}
                                        @endforeach
                                    </div>
                                </div>
                            </form>
                        </div><!-- .header-bar-search -->


                        <div class="header-bar-menu">
                            <ul class="flex justify-content-center align-items-center py-2 pt-md-0">
                                @if (Route::has('login'))

                                    @auth
                                        <a href="{{ url('/home') }} ">Home</a>
                                    @else

                                        <li><a  class='fa fa-sign-in' href="{{ route('login') }}">Login</a></li>
                                        @if (Route::has('register'))
                                            <li> <a  class='fa fa-user-plus' href="{{ route('register') }}">Register</a></li>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                        </div><!-- .header-bar-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .top-header-bar -->

        <div class="nav-bar" >
            <div class="container">
                <div class="row">
                    <div class="col-9 col-lg-2">
                        <div class="site-branding">
                            {{--                            <h6 class="site-title"><a href="{{ url('index') }}" rel="home"><img src="{{ asset('log/logo.png') }}" height="50px" alt=""></a></h6>--}}
                        </div><!-- .site-branding -->
                    </div><!-- .col -->

                    <div class="col-3 col-lg-9 flex justify-content-end align-content-center" >
                        <nav class="site-navigation flex justify-content-end align-items-center">

                            @foreach($categories as $category)
                                {{--                                <li><a href="/categories/{{ $category->id }}"></a></li>--}}
                                {{--                                   <a href="/categories/{{ $category->id }}">{{$category->name}}</a>--}}
                                <div class="dropdown">
                                    <button style="background-color:transparent; color: white;" class="btn  " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{$category->name}}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @foreach($courses as $course)
                                            @if($category->id ==$course->category_id)
                                                <a class="dropdown-item" href="/courses/{{ $course->id }}
                                                    ">{{ $course->title }}</a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach



                            <div class="hamburger-menu d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- .hamburger-menu -->

                            <div class="header-bar-cart">
                                <a href="#" class="flex justify-content-center align-items-center"><span aria-hidden="true" class="icon_bag_alt"></span></a>
                            </div><!-- .header-bar-search -->
                        </nav><!-- .site-navigation -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->
