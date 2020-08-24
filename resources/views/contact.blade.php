@extends('layouts.main');

<body>

@include('layouts.header_menu');<!-- .include header menu bar -->

<div class="page-header-overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <div style="text-align: center; color: white;"><h4>CONTACT</h4></div>
                </header><!-- .entry-header -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header-overlay -->
</div><!-- .page-header -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumbs">
                <ul class="flex flex-wrap align-items-center p-0 m-0">
                    <li><a href="index"><i class="fa fa-home"></i> Home</a></li>
                    <li>Contact</li>
                </ul>
            </div><!-- .breadcrumbs -->
        </div><!-- .col -->
    </div><!-- .row -->

    <div class="row justify-content-between">
        <div >
            <div class="contact-gmap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3797.6185804915976!2d31.052985577016052!3d-17.856506481847163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a576ef545831%3A0x64bc70a616529375!2sAT%20Academy!5e0!3m2!1sen!2szw!4v1596632394532!5m2!1sen!2szw" width="1100" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </div><!-- .contact-gmap -->

        </div><!-- .col -->

        <div class="col-12 col-lg-6">
            <div class="contact-form">
                <h3>Contact Form</h3>

                @if(Session::has('flash_message'))
                    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
                @endif


                <form method="post" action="/contact">
                    {{csrf_field()}}
                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                    @if($errors->has('name'))
                        <small class="form-text invalid-feedback">{{$errors->first('name')}}</small>
                        @endif
                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                        @if($errors->has('email'))
                            <small class="form-text invalid-feedback">{{$errors->first('email')}}</small>
                            @endif
                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                            @if($errors->has('subject'))
                                <small class="form-text invalid-feedback">{{$errors->first('subject')}}</small>
                                @endif
                    <textarea placeholder="Your Message" class="form-control" name="message" rows="4"></textarea>
                                @if($errors->has('message'))
                                    <small class="form-text invalid-feedback">{{$errors->first('message')}}</small>
                                   @endif
                    <input type="submit" value="Send Message">
                </form>
            </div><!-- .contact-form -->
        </div><!-- .col -->

        <div class="col-12 col-lg-6">
            <div class="contact-info">
                <h3>Contact Information</h3>

                <p>AT Academy </p>

                <ul class="p-0 m-0">
                    <li><span>Location:</span> 202 Seke Rd, Harare, Zim</li>
                    <li><span>Email:</span><a href="#">admission@atacademy.com</a></li>

                    <li><span>Phone:</span><a href="#">0242779156</a></li>
                </ul>
            </div><!-- .contact-info -->
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .container -->
@include('layouts.client_log'); <!-- include the footer bar -->

@include('layouts.footer_bar'); <!-- include the footer bar -->

</body>
</html>
