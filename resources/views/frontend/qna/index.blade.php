@extends('frontend.layouts.app')
@section('title', 'QnA')
@section('main-content')
<section class="breadcrumb_area">
    <img class="p_absolute bl_left" src="{{  asset('frontend/img/v.svg') }}" alt="">
    <img class="p_absolute bl_right" src="{{  asset('frontend/img/home_one/b_leaf.svg') }}" alt="">
    <img class="p_absolute star" src="{{  asset('frontend/img/home_one/banner_bg.png') }}" alt="">
    <img class="p_absolute wave_shap_one" src="{{  asset('frontend/img/blog-classic/shap_01.png') }}" alt="">
    <img class="p_absolute wave_shap_two" src="{{  asset('frontend/img/blog-classic/shap_02.png') }}" alt="">
    <img class="p_absolute one wow fadeInRight" src="{{  asset('frontend/img/home_one/b_man_two.png') }}" alt="">
    <img class="p_absolute two wow fadeInUp" data-wow-delay="0.2s" src="{{  asset('frontend/img/home_one/flower.png') }}" alt="">
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
                        <li class="breadcrumb-item active" aria-current="page">Tanya Jawab</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section> <section class="doc_blog_grid_area sec_pad forum-page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="communities-boxes">
                    <div class="kbDoc-com-box">
                        <div class="icon-container">
                            <img src="img/home_support/rc1.png" alt="communinity-box">
                        </div>

                        <div class="kbDoc-com-box-content">
                            <h3 class="title"><a href="#"> Getting Started</a></h3>
                            <p class="total-post">453 Posts</p>
                        </div>
                        <!-- /.kbDoc-com-box-content -->
                    </div>
                    <!-- /.kbDoc-com-box -->

                    <div class="kbDoc-com-box">
                        <div class="icon-container">
                            <img src="img/home_support/rc2.png" alt="communinity-box">
                        </div>

                        <div class="kbDoc-com-box-content">
                            <h3 class="title"><a href="#"> Integrations</a></h3>
                            <p class="total-post">624 Posts</p>
                        </div>
                        <!-- /.kbDoc-com-box-content -->
                    </div>
                    <!-- /.kbDoc-com-box -->

                    <div class="kbDoc-com-box">
                        <div class="icon-container">
                            <img src="img/home_support/rc3.png" alt="communinity-box">
                        </div>

                        <div class="kbDoc-com-box-content">
                            <h3 class="title"><a href="#"> Solar System</a></h3>
                            <p class="total-post">120 Posts</p>
                        </div>
                        <!-- /.kbDoc-com-box-content -->
                    </div>
                    <!-- /.kbDoc-com-box -->

                    <div class="kbDoc-com-box">
                        <div class="icon-container">
                            <img src="img/home_support/rc4.png" alt="communinity-box">
                        </div>

                        <div class="kbDoc-com-box-content">
                            <h3 class="title"><a href="#"> Cloud Server</a></h3>
                            <p class="total-post">235 Posts</p>
                        </div>
                        <!-- /.kbDoc-com-box-content -->
                    </div>
                    <!-- /.kbDoc-com-box -->

                </div>
                <!-- /.communities-boxes -->

                <div class="answer-action">
                    <div class="action-content">
                        <div class="image-wrap">
                            <img src="{{ asset('frontend/img/home_support/answer.png') }}" alt="answer action">
                        </div>

                        <div class="content">
                            <h2 class="ans-title">Punya pertanyaan seputar SPBE?</h2>
                            <!--p>
                                Make use of a qualified tutor to get the answer
                            </p!-->
                        </div>
                    </div>
                    <!-- /.action-content -->

                    <div class="action-button-container">
                        <a href="{{ route('frontend.qna.tanya') }}" class="action_btn btn-ans">Tanya Kami</a>
                    </div>
                    <!-- /.action-button-container -->
                </div>
                <!-- /.answer-action -->

                <div class="post-header">
                    <div class="support-info">
                        <ul class="support-total-info">
                            <li class="open-ticket"><i class="icon_info_alt"></i>{{ $belum }} Belum Dijawab</li>
                            <li class="close-ticket"><i class="icon_check"></i><a href="#">{{ $sudah }} Terjawab</a></li>
                        </ul>
                    </div>
                    <!-- /.support-info -->

                    <div class="support-category-menus">
                        <ul class="category-menu">
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuAuthor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Author
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuAuthor">
                                        <h3 class="title">Filter by author</h3>

                                        <form action="#" class="cate-search-form">
                                            <input type="text" placeholder="Filter users">
                                        </form>

                                        <div class="all-users">
                                            <a class="dropdown-item" href="#0" data-rel="richard">
                                                <img src="img/home_support/fl1.png" alt="user">
                                                Richard Tea
                                            </a>
                                            <a class="dropdown-item" href="#0" data-rel="druid">
                                                <img src="img/home_support/fl2.png" alt="user">
                                                Druid Wensleydale
                                            </a>
                                            <a class="dropdown-item" href="#0" data-rel="weir">
                                                <img src="img/home_support/fl3.png" alt="user">
                                                Weir Doee
                                            </a>
                                            <a class="dropdown-item" href="#0" data-rel="giles">
                                                <img src="img/home_support/fl4.png" alt="user">
                                                Giles Posture
                                            </a>
                                            <a class="dropdown-item" href="#0" data-rel="theodore">
                                                <img src="img/home_support/fl5.png" alt="user">
                                                Theodore Handle
                                            </a>
                                            <a class="dropdown-item" href="#0" data-rel="mann">
                                                <img src="img/home_support/fl6.png" alt="user">
                                                Guy Mann
                                            </a>
                                            <a class="dropdown-item" href="#0" data-rel="dylan">
                                                <img src="img/home_support/fl7.png" alt="user">
                                                Dylan Meringue
                                            </a>
                                            <a class="dropdown-item" href="#0" data-rel="fletch">
                                                <img src="img/home_support/fl8.png" alt="user">
                                                Fletch Skinner
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Label
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLabel">
                                        <h3 class="title">Filter by label</h3>

                                        <form action="#" class="cate-search-form">
                                            <input type="text" placeholder="Filter users">
                                        </form>

                                        <div class="all-users">
                                            <a class="dropdown-item" data-rel="kbDoc" href="#0">
                                                <span class="color-purple"></span>
                                                KbDoc
                                            </a>
                                            <a class="dropdown-item" data-rel="improvement" href="#0">
                                                <span class="color-yellow">
                                                </span>
                                                Improvement !
                                            </a>
                                            <a class="dropdown-item" data-rel="css" href="#0">
                                                <span class="color-ass"></span>
                                                CSS
                                            </a>
                                            <a class="dropdown-item" href="#0" data-rel="feature">
                                                <span class="color-green"></span>
                                                Feature
                                            </a>
                                            <a class="dropdown-item" data-rel="spider" href="#0">
                                                <span class="color-orange"></span>
                                                Spider theme
                                            </a>
                                            <a class="dropdown-item" href="#0" data-rel="open">
                                                <span class="color-theme"></span>
                                                Open
                                            </a>
                                            <a class="dropdown-item" data-rel="bug" href="#0">
                                                <span class="color-pink"></span>
                                                Bug !
                                            </a>
                                            <a class="dropdown-item" data-rel="doc" href="#0">
                                                <span class="color-light-green"></span>
                                                Docs
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuAssignee" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Assignee
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuAssignee">
                                        <h3 class="title">Filter by author</h3>

                                        <form action="#" class="cate-search-form">
                                            <input type="text" placeholder="Filter users">
                                        </form>

                                        <div class="all-users">
                                            <a class="dropdown-item" href="#">
                                                <img src="img/home_support/fl1.png" alt="user">
                                                Richard Tea
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="img/home_support/fl2.png" alt="user">
                                                Druid Wensleydale
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="img/home_support/fl3.png" alt="user">
                                                Weir Doee
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="img/home_support/fl4.png" alt="user">
                                                Giles Posture
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="img/home_support/fl5.png" alt="user">
                                                Theodore Handle
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="img/home_support/fl6.png" alt="user">
                                                Guy Mann
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="img/home_support/fl7.png" alt="user">
                                                Dylan Meringue
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="img/home_support/fl8.png" alt="user">Fletch Skinner
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sort
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <h3 class="title">Sort by</h3>
                                        <div class="short-by">
                                            <a class="dropdown-item active-short" href="#0">Newest</a>
                                            <a class="dropdown-item" href="#0">Oldest</a>
                                            <a class="dropdown-item" href="#0">Most commented</a>
                                            <a class="dropdown-item" href="#0">Least commented</a>
                                            <a class="dropdown-item" href="#0">Recently updated</a>
                                            <a class="dropdown-item" href="#0">Least recently updated</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.support-category-menus -->
                </div>
                <!-- /.post-header -->
                @foreach ($questions as $question)
                <div class="community-posts-wrapper bb-radius">
                    <div class="community-post style-two kbDoc richard bug">
                        <div class="post-content">
                            <div class="author-avatar">
                                <img src="{{ asset('frontend/img/home_support/cp2.jpg') }}" alt="community post">
                            </div>
                            <div class="entry-content">
                                <h3 class="post-title">
                                    <a href="{{ url('tanyajawab/'.$question->id )}}">{{ str_limit($question->judul, $limit = 60, $end = '...') }}</a>
                                </h3>
                                <ul class="meta">
                                    <li>{{ $question->nama}}</li>
                                    <li><i class="icon_calendar"></i>{{ $question->created_at }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-meta-wrapper">
                            <ul class="post-meta-info">
                                <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                <li><a href="#"><i class="icon_star"></i>5</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.community-post -->
                </div>
                @endforeach
                <!-- /.community-posts-wrapper -->

                <div class="pagination-wrapper">
                    <div class="view-post-of">
                        <p>Viewing 8 topics - 1 through 10 (of 342 total)</p>
                    </div>
                    <ul class="post-pagination">
                        <li class="prev-post pegi-disable"><a href="#"><i class="arrow_carrot-left"></i></a>
                        </li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">15</a></li>
                        <li class="next-post"><a href="#"><i class="arrow_carrot-right"></i></a></li>
                    </ul>
                </div>
                <!-- /.pagination-wrapper -->

            </div>
            <!-- /.col-lg-8 -->

            <div class="col-lg-4">
                <div class="forum_sidebar">
                    <div class="widget status_widget">
                        <h4 class="c_head">Information</h4>
                        <p class="status">Support is <span class="offline">Offline</span></p>

                        <div class="open-hours">
                            <h4 class="title-sm">Our office hours</h4>
                            <p>Monday - Friday / 10am - 6pm (UTC +4) NewYork</p>
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
                            <li><a href="#">Product board</a></li>
                            <li><a href="#">WordPress</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">ui/ux</a></li>
                            <li><a href="#">Doc Design</a></li>
                            <li><a href="#">DocAll</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- /.col-lg-4 -->
        </div>
    </div>
</section>
@endsection
