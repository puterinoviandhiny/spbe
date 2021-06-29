@extends('frontend.layouts.app')
@section('title', 'Tanya | QnA')
@section('main-content')

<section class="breadcrumb_area">
    <img class="p_absolute bl_left" src="{{ asset('frontend/img/v.svg') }}" alt="">
    <img class="p_absolute bl_right" src="{{ asset('frontend/img/home_one/b_leaf.svg') }}" alt="">
    <img class="p_absolute star" src="{{ asset('frontend/img/home_one/banner_bg.png') }}" alt="">
    <img class="p_absolute wave_shap_one" src="{{ asset('frontend/img/blog-classic/shap_01.png') }}" alt="">
    <img class="p_absolute wave_shap_two" src="{{ asset('frontend/img/blog-classic/shap_02.png') }}" alt="">
    <img class="p_absolute one wow fadeInRight" src="{{ asset('frontend/img/home_one/b_man_two.png') }}" alt="">
    <img class="p_absolute two wow fadeInUp" data-wow-delay="0.2s" src="{{ asset('frontend/img/home_one/flower.png') }}" alt="">
    <div class="container custom_container">
        <form action="#" class="banner_search_form banner_search_form_two">
            <div class="input-group">
                <input type="search" class="form-control" placeholder='Search ("/" to focus)'>
                <div class="input-group-append">
                    <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>Semua Kategori</option>
                        @foreach ($kategori as $kat)
                        <option>{{ $kat->nama }}</option>
                        @endforeach
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
                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                    </ol>
                </nav>
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
                            <a href="#" class="action_btn btn-ans ask-btn">Tanya Kami</a>
                        </div>
                    </div>
                </div>

                <!-- Forum post content -->
                <div class="q-title">
                    <span class="question-icon" title="Question">Q:</span>
                    <h1>{{ $pertanyaan->judul }}</h1>

                </div>
                <div class="forum-post-content">
                    <div class="content">
                    <p>{!! $pertanyaan->isi !!}</p>
                    </div>
                    <div class="forum-post-btm">
                        <div class="taxonomy forum-post-tags">
                            <i class="icon_tags_alt"></i><a href="#">{{ $pertanyaan->kategoriId->nama }}</a>
                        </div>
                    </div>

                </div>


                <!-- Best answer -->
                <div class="best-answer">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="forum-post-top">
                                <a class="author-avatar" href="#">
                                    <img src="img/forum/author-avatar.png" alt="">
                                </a>
                                <div class="forum-post-author">
                                    <a class="author-name" href="#"> {{ $pertanyaan->penjawabId->name }} </a>
                                    <div class="forum-author-meta">
                                        <div class="author-badge">
                                            <span>Dijawab pada</span>
                                            <i class="icon_calendar"></i>
                                            <a href="#">{{ $pertanyaan->tgl_jawab }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <p class="accepted-ans-mark">
                                <i class="icon_check"></i> <span>{{ $pertanyaan->status }}</span>
                            </p>
                        </div>
                    </div>
                    <div class="best-ans-content d-flex">
                        <span class="question-icon" title="The Best Answer">A:</span>
                        <p>
                            {!! $pertanyaan->jawaban !!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach



            <div class="col-lg-4">
                <div class="forum_sidebar">
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

                </div>
            </div>
            <!-- /.col-lg-4 -->
        </div>
    </div>
</section>
@endsection
