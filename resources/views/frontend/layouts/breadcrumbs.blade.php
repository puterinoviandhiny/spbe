<section class="breadcrumb_area breadcrumb_area_four">
    <img class="p_absolute bl_left" src="{{  asset('frontend/img/v.svg') }}" alt="">
    <img class="p_absolute bl_right" src="{{  asset('frontend/img/home_one/b_leaf.svg') }}" alt="">
    <img class="p_absolute one wow fadeInRight" src="{{  asset('frontend/img/home_one/b_man_two.png') }}" alt="">
    <div class="container">
        <div class="breadcrumb_content_two text-center">
            <h2>@yield('title')</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
