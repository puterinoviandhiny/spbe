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

                                <li><a href="#"><i class="icon_chat_alt"></i>
                                    @if ($question->jawaban == '') 0
                                    @else 1
                                @endif</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.community-post -->
                </div>

                <!-- /.community-posts-wrapper -->
                @endforeach
                {{ $questions->links('frontend.layouts.paginator') }}
                <!-- /.pagination-wrapper -->

            </div>
            <!-- /.col-lg-8 -->

            <div class="col-lg-4">
                <div class="forum_sidebar">
                    <!--div class="widget status_widget">
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

                    </div-->

                    <!--div class="widget usefull_links_widget">
                        <h4 class="c_head">Usefull Links</h4>
                        <ul class="list-unstyled usefull-links">
                            <li><i class="icon_lightbulb_alt"></i><a href="#">FAQs</a></li>
                            <li><i class="icon_clock_alt"></i><a href="#">Popular</a></li>
                            <li><i class="icon_piechart"></i><a href="#">Recent</a></li>
                            <li><i class="icon_info_alt"></i><a href="#">Unanswered</a></li>
                        </ul>
                    </div-->
                   @include('frontend.widgets.kategori')

                    <!--div class="widget tag_widget">
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
                    </div-->

                </div>
            </div>
            <!-- /.col-lg-4 -->
        </div>
    </div>
</section>
@endsection
