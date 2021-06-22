@extends('frontend.layouts.app')
@section('title', 'Tanya | QnA')
@section('main-content')

<section class="breadcrumb_area">
    <img class="p_absolute bl_left" src="img/v.svg" alt="">
    <img class="p_absolute bl_right" src="img/home_one/b_leaf.svg" alt="">
    <img class="p_absolute star" src="img/home_one/banner_bg.png" alt="">
    <img class="p_absolute wave_shap_one" src="img/blog-classic/shap_01.png" alt="">
    <img class="p_absolute wave_shap_two" src="img/blog-classic/shap_02.png" alt="">
    <img class="p_absolute one wow fadeInRight" src="img/home_one/b_man_two.png" alt="">
    <img class="p_absolute two wow fadeInUp" data-wow-delay="0.2s" src="img/home_one/flower.png" alt="">
    <div class="container custom_container">
        <form action="#" class="banner_search_form banner_search_form_two">
            <div class="input-group">
                <input type="search" class="form-control" placeholder='Search ("/" to focus)'>
                <div class="input-group-append">
                    <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>All Category</option>
                        <option value="1">Doc Archive</option>
                        <option value="2">Doc List</option>
                        <option value="3">KbDoc</option>
                    </select>
                </div>
                <button type="submit"><i class="icon_search"></i></button>
            </div>
        </form>
    </div>
</section>

<section class="page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog with sidebar</li>
                    </ol>
                </nav>
            </div>
            <div class="col-sm-5">
                <a href="#" class="date"><i class="icon_clock_alt"></i>Updated on March 03, 2020</a>
            </div>
        </div>
    </div>
</section>

<section class="doc_blog_grid_area sec_pad forum-single-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Forum post top area -->
                <div class="row">
                    <div class="col-lg-9">
                        <div class="forum-post-top">
                            <a class="author-avatar" href="#">
                                <img src="img/forum/author-avatar.png" alt="">
                            </a>
                            @foreach ($data as $pertanyaan)
                            <div class="forum-post-author">
                                <a class="author-name" href="#"> {{ $pertanyaan->nama }} </a>
                                <div class="forum-author-meta">
                                    <div class="author-badge">
                                        <i class="icon_calendar"></i>
                                        <a href="#">{{ $pertanyaan->created_at }}</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="action-button-container">
                            <a href="#" class="action_btn btn-ans ask-btn">Ask Question</a>
                        </div>
                    </div>
                </div>

                <!-- Forum post content -->
                <div class="q-title">
                    <span class="question-icon" title="Question">Q:</span>
                    <h1>{{ $pertanyaan->judul }}</h1>
                    <a href="#" class="badge">Status</a>
                </div>
                <div class="forum-post-content">
                    <div class="content">
                    <p>{!! $pertanyaan->isi !!}</p>
                    </div>
                    <div class="forum-post-btm">
                        <div class="taxonomy forum-post-tags">
                            <i class="icon_tags_alt"></i><a href="#">Bug</a>, <a href="#">Feature</a>, <a href="#">Error</a>
                        </div>
                        <div class="taxonomy forum-post-cat">
                            <img src="img/forum/logo-favicon.png" alt=""><a href="#">KbDoc Support</a>
                        </div>
                    </div>

                </div>
                @endforeach

                <!-- Best answer -->
                <div class="best-answer">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="forum-post-top">
                                <a class="author-avatar" href="#">
                                    <img src="img/forum/author-avatar.png" alt="">
                                </a>
                                <div class="forum-post-author">
                                    <a class="author-name" href="#"> Eh Jewel </a>
                                    <div class="forum-author-meta">
                                        <div class="author-badge">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="15px">
                                                <path fill-rule="evenodd"  fill="rgb(131, 135, 147)"
                                                      d="M11.729,12.136 L11.582,12.167 C11.362,12.415 11.125,12.645 10.869,12.857 L14.999,12.857 C15.134,12.857 15.255,12.944 15.307,13.077 C15.359,13.211 15.331,13.365 15.235,13.467 L14.488,14.268 C14.053,14.733 13.452,15.000 12.838,15.000 L2.495,15.000 C1.872,15.000 1.286,14.740 0.845,14.268 L0.098,13.467 C0.002,13.365 -0.026,13.211 0.026,13.077 C0.077,12.944 0.199,12.857 0.334,12.857 L4.463,12.857 C2.928,11.585 2.000,9.630 2.000,7.499 L2.000,6.785 C2.000,6.194 2.449,5.713 3.000,5.713 L12.333,5.713 C12.885,5.713 13.333,6.194 13.333,6.785 L13.333,7.343 C13.869,7.160 14.736,6.973 15.355,7.400 C15.783,7.696 16.000,8.209 16.000,8.928 C16.000,11.239 11.903,12.100 11.729,12.136 ZM14.994,8.002 C14.557,7.698 13.715,7.941 13.294,8.113 C13.197,9.261 12.837,10.339 12.255,11.269 C13.480,10.911 15.333,10.116 15.333,8.928 C15.333,8.462 15.223,8.158 14.994,8.002 ZM10.261,4.419 C10.376,4.573 10.353,4.798 10.209,4.921 C10.148,4.974 10.074,4.999 10.001,4.999 C9.903,4.999 9.807,4.954 9.740,4.865 C9.198,4.139 9.198,3.002 9.741,2.277 C10.086,1.816 10.086,1.040 9.742,0.580 C9.627,0.426 9.650,0.201 9.794,0.078 C9.937,-0.044 10.146,-0.020 10.263,0.134 C10.805,0.860 10.805,1.996 10.263,2.722 C9.917,3.183 9.917,3.959 10.261,4.419 ZM8.259,4.419 C8.373,4.573 8.350,4.798 8.207,4.921 C8.145,4.974 8.071,4.999 7.999,4.999 C7.901,4.999 7.804,4.954 7.738,4.865 C7.195,4.139 7.195,3.002 7.738,2.277 C8.082,1.816 8.082,1.040 7.739,0.580 C7.624,0.426 7.647,0.201 7.791,0.078 C7.935,-0.045 8.145,-0.020 8.259,0.134 C8.802,0.860 8.802,1.996 8.259,2.722 C7.915,3.183 7.915,3.959 8.259,4.419 ZM6.261,4.418 C6.376,4.572 6.353,4.797 6.210,4.920 C6.148,4.973 6.074,4.999 6.001,4.999 C5.903,4.999 5.807,4.953 5.741,4.865 C5.198,4.139 5.198,3.002 5.741,2.276 C6.085,1.815 6.085,1.039 5.742,0.580 C5.627,0.426 5.650,0.201 5.794,0.078 C5.937,-0.046 6.147,-0.020 6.262,0.133 C6.804,0.859 6.804,1.996 6.262,2.721 C5.918,3.182 5.918,3.959 6.261,4.418 Z"/>
                                            </svg>
                                            <span>Conversation Starter</span>
                                        </div>
                                        <div class="author-badge">
                                            <i class="icon_calendar"></i>
                                            <a href="#">January 16 at 10:32 PM</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <p class="accepted-ans-mark">
                                <i class="icon_check"></i> <span>Accepted Solution</span>
                            </p>
                        </div>
                    </div>
                    <div class="best-ans-content d-flex">
                        <span class="question-icon" title="The Best Answer">A:</span>
                        <p>
                            Hi,
                            You can edit the service pages with Elementor. To enable Elementor on Service post type, follow the bellow steps<br>
                            Step 1 - Navigate to your website's WordPress Dashbord>Elementor>Settings<br>
                            Step 2 - Tick the post you went to edit with Elementor in the post typs section and click the  save<br>
                            changes button<br>
                            Step 3 - Now you can click edit with Elementor button and start working<br><br>
                            Thanks!
                        </p>
                    </div>
                </div>
            </div>




            <div class="col-lg-4">
                <div class="forum_sidebar">
                    <div class="widget status_widget">
                        <h4 class="c_head">Information</h4>
                        <p class="status">Support is <span class="offline">Offline</span></p>
                        <div class="open-hours">
                            <h4 class="title-sm">Our office hours</h4>
                            <p>
                                Monday - Friday / 10am - 6pm (UTC +4) NewYork
                            </p>
                            <ul class="current-time list-unstyled">
                                <li>
                                    <h4 class="title-sm">Your time</h4>
                                    <p>10:30:15 PM</p>
                                </li>
                                <li>
                                    <h4 class="title-sm">Your time</h4>
                                    <p>10:30:15 PM</p>
                                </li>
                            </ul>
                        </div>
                        <!-- /.open-hours -->
                    </div>

                    <div class="widget usefull_links_widget">
                        <h4 class="c_head">Usefull Links</h4>

                        <ul class="list-unstyled usefull-links">
                            <li><i class="icon_lightbulb_alt"></i><a href="#">FAQs</a></li>
                            <li><i class="icon_clock_alt"></i><a href="#">Popular</a></li>
                            <li><i class="icon_piechart"></i><a href="#">Recent</a></li>
                            <li><i class="icon_info_alt"></i><a href="#">Unanswered</a></li>
                        </ul>
                    </div>
                    <div class="widget ticket_widget">
                        <h4 class="c_head">Ticket Categories</h4>

                        <ul class="list-unstyled ticket_categories">
                            <li><img src="img/home_support/cmm5.png" alt="category"><a href="#">Docs WordPress
                                    Theme</a> <span class="count">10</span></li>
                            <li><img src="img/home_support/cmm4.png" alt="category"><a href="#">Product Landing
                                    Page</a><span class="count count-fill">13</span><span
                                    class="count">54</span></li>
                            <li><img src="img/home_support/cmm2.png" alt="category"><a href="#">Knowledge base
                                    Template</a><span class="count">142</span></li>
                            <li><img src="img/home_support/cmm8.png" alt="category"><a href="#">Startup and App
                                    WP Theme</a> <span class="count">13</span></li>
                            <li><img src="img/home_support/cmm9.png" alt="category"><a href="#">Clean Email
                                    Template</a> <span class="count">123</span></li>
                            <li><img src="img/home_support/cmm10.png" alt="category"><a href="#">Apps WordPress
                                    Theme</a> <span class="count">18</span></li>
                        </ul>
                    </div>

                    <div class="widget tag_widget">
                        <h4 class="c_head">Tags</h4>
                        <ul class="list-unstyled w_tag_list style-light">
                            <li><a href="#">Swagger</a></li>
                            <li><a href="#">KbDoc</a></li>
                            <li><a href="#">weCare</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Download</a></li>
                            <li><a href="#">Doc</a></li>
                            <li><a href="#">WordPress</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">ui/ux</a></li>
                            <li><a href="#">Doc Design</a></li>
                            <li><a href="#">DocAll</a></li>
                            <li><a href="#">Productboard</a></li>
                            <li><a href="#">Magento</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- /.col-lg-4 -->
        </div>
    </div>
</section>
@endsection
