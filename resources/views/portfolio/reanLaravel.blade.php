@extends('portfolio.layout')
@section('main')

<!-- [responsive]  -->

@include('portfolio.res_menu')

<!-- [slide down menu] -->

@include('portfolio.res_slide_menu_down')

<!-- [slide down menu] -->

<!-- [responsive]  -->


<!-- [header] -->

@include('portfolio.header_reancode')

<!-- [header] -->

<!-- Banner Ads  -->

<div class="container container_banner_ads">
    <div class="banner_ads"><strong>Banner Ads</strong></div>
</div>

<!-- Banner Ads  -->

<!-- Left Slide Ads  -->

<div class="Left_Side_Ads"><strong>Left Side Ads</strong></div>

<!-- Left Slide Ads  -->

<!-- Right Slide Ads  -->

<div class="Right_Side_Ads"><strong>Right Side Ads</strong></div>

<!-- Right Slide Ads  -->



<div class="html" id="html">
    <div class="box_html">
        <div class="container-fluid">
            <h1>Laravel</h1>
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="day1">
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="day1">
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="day1">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="day1">
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="day1">
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="day1">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="day1">
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="day1">
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="day1">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="day1">
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="day1">
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="day1">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Ads  -->

<div class="Footer_Ads mt-5"><strong>Footer Ads</strong></div>

<!-- Footer Ads  -->

<!-- Contact  -->

@include('portfolio.contact')

<!-- Contact  -->



<!-- [scroll To top]  -->

<div class="box_scroll">
    <i class="fa-solid fa-angle-up"></i>
</div>

<!-- [scroll To top]  -->


<script>
    var box_scroll = document.querySelector('.box_scroll');

    function OnScroll() {
        if (window.scrollY >= 10) {

            box_scroll.style.position = 'fixed';
            box_scroll.style.top = '90%';
            box_scroll.style.transition = '2s';
        }
        if (window.scrollY <= 50) {

            box_scroll.style.top = '-100%';
            box_scroll.style.transition = '2s';
        }
    }

    $(document).ready(function() {

        $('.flag_khmer').click(function() {
            $(this).remove();
            $('.flag_english').css('display', 'block');
        })

        $('.flag_english').click(function() {
            $(this).remove();
            $('.flag_khmer').css('display', 'block');
        })

        $('.box_home').mousemove(function() {
            $('.pic_cover').addClass('add_pic_cover');
        })

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();


            // var side_button = $("a").length;
            // for(i=0 ; i<side_button ; i++){
            //     $("a:eq("+i+")").css("color", "#808080");
            // }
            // if (scroll < 711) {
            //     $("a:eq(0)").css("color", "##FFC006");
            // }
            // else if (scroll >= 712.6 && scroll < 1496 ) {
            //     $("a:eq(1)").css("color", "##FFC006");
            // }
            // else if (scroll >= 1497) {
            //     $("a:eq(2)").css("color", "##FFC006");
            // }
        })

        $('.box_scroll').click(function() {
            $('html').scrollTop({
                'behavior': 'smooth'
            });
        })

        $('a').click(function() {
            var length_li = $('ul').find('li').find('a').length;

            for (var i = 0; i < length_li; i++) {
                $('a').css('color', '#808080');
            }
            $(this).css('color', '#FFC006');
        })


        // [slide down menu]

        $('.box').click(function() {
            $('.slide_menu_down').toggleClass('add_slide_menu_down');
        })


        var typed = new Typed(".auto_typing", {
            strings: ["@lang('translate.hi')", "@lang('translate.me1')", "@lang('translate.me2')", "@lang('translate.me3')", "@lang('translate.me4')", "@lang('translate.me5')"],
            typeSpeed: 50,
            backSpeed: 30,
            loop: true
        })





    })
</script>

<script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>


@endsection