<div class="click_capture"></div>
<nav class="navbar navbar-expand-lg menu_one" id="sticky">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ Voyager::image(setting('site.logo')) }}" srcset="{{ Voyager::image(setting('site.logo')) }} 2x" alt="logo" height="50px" width="auto">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="menu_toggle">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="hamburger-cross">
                        <span></span>
                        <span></span>
                    </span>
                </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav menu ml-auto">
                {{ menu('frontend', 'frontend.layouts.nav') }}
            </ul>
            <a class="nav_btn" href="{{ route('voyager.login') }}"><i class="icon_profile"></i>Log In</a>
        </div>
    </div>
</nav>
