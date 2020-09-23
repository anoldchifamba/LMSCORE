


<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-51417514-4');



</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<main class="container main" style="margin-top: -4%;">

    <div class="row">
        <div class="categories-container">
            <div class="widget" >
                <button onclick="ScrollCats(false)"  aria-label="Previous" class="previous round">&#8249;</button>
                <button onclick="ScrollCats(true)"  aria-label="Next" class="next round">&#8250;<i class="fa fa-next"></i></button>
                <div class="service-cards-container scrollbar-primary" id="categories-scroll-container" style="overflow: hidden;">
                    <div class="categories service-cards">



                        @foreach($courses as $course)
                            @if($category->id ==$course->category_id)
                                <a href="/courses/{{ $course->id }}" title="{{  str_limit($course->title ,$limit=40 ,$end='...')}}" class="category" style="background-image: linear-gradient(to bottom,white, white); width: 180px;height: 220px;">
                                    <div class="icon-container" sstyle="height: 800%;" >
                                        <img src="{{  asset('storage/course_image/'.$course->photo)}}" alt="{{  str_limit($course->title ,$limit=40 ,$end='...')}}"  style="height: 100%; width:100%; border-radius: 5px; "/>
                                        <br>
                                        <span class="text-muted" style="font-size: 12px;"><i class="fas fa-title"></i>{{  str_limit($course->title ,$limit=40 ,$end='...')}} </span><br>
                                        <span class="text-muted" style="font-size: 10px;"><i class="fa fa-user"></i> {{ $course->user['name'] }}</span><br>
                                        <small class="text-muted  " style="font-size: 8px;">Posted on {{ $course->created_at->format('h :i a - D d M Y') }}</small><br>
                                        <span class="fa fa-star checked" style="font-size: 8px;"></span>
                                        <span class="fa fa-star checked" style="font-size: 8px;"></span>
                                        <span class="fa fa-star checked"style="font-size: 8px;"></span>
                                        <span class="fa fa-star checked"style="font-size: 8px;"></span>
                                        <span class="fa fa-star-o"style="font-size: 8px;">({{  $course->view_count }})</span>
                                        <br>
                                        <span class="text-muted" style="font-size: 8px;">Views :({{  $course->view_count }})</span>
                                        <br>
                                        <div class="btn btn-warning btn-xs align-items-center" >
                                            By Course:     $  {{  $course->discount_price }}<small class="text-muted"> <strike> $  {{  $course->actual_price }} </strike></small>
                                        </div><!-- .course-cost --><br>

                                    </div>
                                </a>
                            @endif
                        @endforeach














                        {{--                    <a href="mobile-data-whatsapp-facebook-bundles.html" title="Mobile Bundles" class="category" style="background-image: linear-gradient(to bottom, #FF419B, #FF8C41);">--}}
                        {{--                        <div class="icon-container">--}}
                        {{--                                <img src="uploaded/ad4348f5-9533-4c25-9440-cb64e31ea49d.svg" alt="Mobile Bundles" />--}}
                        {{--                            <span class="text">Mobile Bundles</span>--}}
                        {{--                        </div>--}}
                        {{--                    </a>--}}
                        {{--                    <a href="airtime.html" title="Airtime" class="category" style="background-image: linear-gradient(to bottom, #185ff9, #99a2ff);">--}}
                        {{--                        <div class="icon-container">--}}
                        {{--                                <img src="uploaded/0a261edc-2bcd-425a-a864-22182e5b0d91.svg" alt="Airtime" />--}}
                        {{--                            <span class="text">Airtime</span>--}}
                        {{--                        </div>--}}
                        {{--                    </a>--}}
                        {{--                    <a href="broadband.html" title="Broadband" class="category" style="background-image: linear-gradient(to bottom, #13c0a3, #4cc4ff);">--}}
                        {{--                        <div class="icon-container">--}}
                        {{--                                <img src="uploaded/896bffd8-818e-4b8e-849c-c6290d034efb.svg" alt="Broadband" />--}}
                        {{--                            <span class="text">Broadband</span>--}}
                        {{--                        </div>--}}
                        {{--                    </a>--}}
                        {{--                    <a href="voip-phone.html" title="Phone" class="category" style="background-image: linear-gradient(to bottom, #00b359, #aaff80);">--}}
                        {{--                        <div class="icon-container">--}}
                        {{--                                <img src="uploaded/a7dd66fa-5468-4388-9400-5cc6ea6b9a41.svg" alt="Phone" />--}}
                        {{--                            <span class="text">Phone</span>--}}
                        {{--                        </div>--}}
                        {{--                    </a>--}}
                        {{--                    <a href="wifi-hotspot.html" title="WiFi Hotspot" class="category" style="background-image: linear-gradient(to bottom, #ff6619, #ffdc73);">--}}
                        {{--                        <div class="icon-container">--}}
                        {{--                                <img src="uploaded/75e534a4-5712-481c-91b2-7e2b29926748.svg" alt="WiFi Hotspot" />--}}
                        {{--                            <span class="text">WiFi Hotspot</span>--}}
                        {{--                        </div>--}}
                        {{--                    </a>--}}
                        {{--                    <a href="tuition-fees.html" title="Tuition Fees" class="category" style="background-image: linear-gradient(to bottom, #CD1B88, #DB75B2);">--}}
                        {{--                        <div class="icon-container">--}}
                        {{--                                <img src="uploaded/46b341eb-f682-480d-a2dc-2f3a79ae0acc.svg" alt="Tuition Fees" />--}}
                        {{--                            <span class="text">Tuition Fees</span>--}}
                        {{--                        </div>--}}
                        {{--                    </a>--}}
                        {{--                    <a href="fuel.html" title="Fuel" class="category" style="background-image: linear-gradient(to bottom, #f21d13, #f4f533);">--}}
                        {{--                        <div class="icon-container">--}}
                        {{--                                <img src="uploaded/98acb608-3de1-4863-8ab8-2d29b9a94a62.svg" alt="Fuel" />--}}
                        {{--                            <span class="text">Fuel</span>--}}
                        {{--                        </div>--}}
                        {{--                    </a>--}}
                        {{--                    <a href="donations.html" title="Donations" class="category" style="background-image: linear-gradient(to bottom, #03d4f1, #8455fd);">--}}
                        {{--                        <div class="icon-container">--}}
                        {{--                                <img src="uploaded/52860df5-cd86-4ad9-943c-8af550f51119.svg" alt="Donations" />--}}
                        {{--                            <span class="text">Donations</span>--}}
                        {{--                        </div>--}}
                        {{--                    </a>--}}









                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            function ScrollCats(next) {
                var c = $('#categories-scroll-container');
                c.animate({ scrollLeft: "+=" + (c.width() * (next ? 1 : -1)) + "px" }, "fast");
            }
        </script>
    </div>


</main>




<script type="text/javascript">
    [].forEach.call(document.querySelectorAll('img[data-src]'),
        function (img) {
            img.setAttribute('src', img.getAttribute('data-src'));
            img.onload = function () {
                img.removeAttribute('data-src');
            };
        });

    $(function () {
        MESSAGING.GetServerAlerts();
        jQuery('.scrollable').scrollbar();
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
