<div class="header">
    <div class="container-fluid">
        <div class="navbar">
            <div class="box_logo">
                <a href="{{ url('/') }}">
                    <img style="width: 80px; height:70px;" src="{{ asset('assets/img/logo1.png') }}" alt="">
                </a>
                <!-- <h2>
                             <strong>@lang('translate.title')</strong>
                        </h2> -->
            </div>
            <div class="box_menu">
                <ul>
                    <li><a href="{{ route('html') }}" class="select_text">HTML</a></li>
                    <li><a href="{{ route('css') }}">CSS</a></li>
                    <li><a href="{{ route('bootstrap') }}">BootStrap</a></li>
                    <li><a href="{{ route('javascript') }}">JavaScript</a></li>
                    <li><a href="{{ route('jquery') }}">JQuery</a></li>
                    <li><a href="{{ route('php') }}">PHP</a></li>
                    <li><a href="{{ route('laravel') }}">Laravel</a></li>
                </ul>
            </div>
            <div class="box_language">
                <div class="dropdown">
                    <a style="text-decoration: none; color:black;" class=" dropdown-toggle text-dark" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        @lang('translate.language')
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="locale/en"><img style="width: 30px; height:20px;" src="{{ asset('assets/img/flag-united-kingdom.jpg') }}">&nbsp; @lang('translate.eng')</a></li>
                        <li><a class="dropdown-item" href="locale/kh"><img style="width: 30px; height:20px;" src="{{ asset('assets/img/flag-khmer.jpg') }}">&nbsp; @lang('translate.khm')</a></li>
                        <li><a class="dropdown-item" href="locale/ch"><img style="width: 30px; height:20px;" src="{{ asset('assets/img/flag-china.jpg') }}">&nbsp; @lang('translate.chi')</a></li>
                        <li><a class="dropdown-item" href="locale/th"><img style="width: 30px; height:20px;" src="{{ asset('assets/img/flag-thailand.jpg') }}">&nbsp; @lang('translate.thai')</a></li>
                        <li><a class="dropdown-item" href="locale/ko"><img style="width: 30px; height:20px;" src="{{ asset('assets/img/flag-south-korea.jpg') }}">&nbsp; @lang('translate.korean')</a></li>
                        <li><a class="dropdown-item" href="locale/vi"><img style="width: 30px; height:20px;" src="{{ asset('assets/img/flag-vietnam.jpg') }}">&nbsp; @lang('translate.vietnam')</a></li>
                        <li><a class="dropdown-item" href="locale/ja"><img style="width: 30px; height:20px;" src="{{ asset('assets/img/flag-japan.jpg') }}">&nbsp; @lang('translate.japanese')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>