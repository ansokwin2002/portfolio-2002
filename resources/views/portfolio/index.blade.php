@extends('portfolio.layout')
@section('main')

<!-- [responsive]  -->

@include('portfolio.res_menu')

<!-- [slide down menu] -->

@include('portfolio.res_slide_menu_down')

<!-- [slide down menu] -->

<!-- [responsive]  -->

<!-- [header] -->
   
@include('portfolio.header')

<!-- [header] -->

<!-- [home]  -->

@include('portfolio.home')

<!-- [home]  -->

<!-- [about]  -->

@include('portfolio.about')

<!-- [about]  -->

<!-- [services]  -->

@include('portfolio.services')

<!-- [services]  -->

<!-- [experience]  -->



<!-- [experience]  -->

<!-- [works]  -->

@include('portfolio.work')

<!-- [works]  -->

<!-- [contact]  -->

@if (Session::has('create_success'))
                    <script>
                        Swal.fire("Message","{{ Session::get('create_success') }}",'success',
                            'The Internet?',
                            'That thing is still around?',
                            'question',
                           
                        )
                    </script>
        @endif

@include('portfolio.contact')

<!-- [contact]  -->

<!-- [scroll To top]  -->

<div class="box_scroll">
<i class="fa-solid fa-angle-up"></i>
</div>

<!-- [scroll To top]  -->


<script>




var box_scroll = document.querySelector('.box_scroll');

function OnScroll() {
    if(window.scrollY >= 10) {

            box_scroll.style.position = 'fixed';
            box_scroll.style.top = '90%';
            box_scroll.style.transition = '2s';
    }
    if(window.scrollY <= 50) {

        box_scroll.style.top = '-100%';
        box_scroll.style.transition = '2s';
    }
}

$(document).ready(function(){

    $('.flag_khmer').click(function(){
        $(this).remove();
        $('.flag_english').css('display','block');
    })

    $('.flag_english').click(function(){
        $(this).remove();
        $('.flag_khmer').css('display','block');
    })

    $('.box_home').mousemove(function(){
        $('.pic_cover').addClass('add_pic_cover');
    })

    $(window).scroll(function(){
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

    $('.box_scroll').click(function(){
        $('html').scrollTop({'behavior':'smooth'});
    })
    
    $('a').click(function(){
        var length_li = $('ul').find('li').find('a').length;
        
        for(var i=0; i<length_li;i++){
            $('a').css('color','#808080');
        }
        $(this).css('color','#FFC006');
    })


    // [slide down menu]

    $('.box').click(function(){
        $('.slide_menu_down').toggleClass('add_slide_menu_down');
    })


    var typed = new  Typed(".auto_typing",{
        strings:["@lang('translate.hi')","@lang('translate.me1')","@lang('translate.me2')","@lang('translate.me3')","@lang('translate.me4')","@lang('translate.me5')"],
        typeSpeed: 50,
        backSpeed: 30,
        loop: true
    })

    
    

    
})



</script>

<script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>


@endsection