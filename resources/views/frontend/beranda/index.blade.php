@extends('frontend.layouts.app')
@section('title', 'Beranda')
@section('main-content')
<section class="kbDoc-banner-support">
    <div class="banner-content text-center">
        <div class="banner-content-wrapper">
            <h1 class="banner-title wow fadeInUp">Sistem Pemerintahan Berbasis Elektonik</h1>
            <p class="banner-description wow fadeInUp" data-wow-delay="0.3s">
                Find answers, ask questions, and connect with our community of KbDoc users<br> from around the
                world.
            </p>
            <div class="banner-search-form-wrapper wow fadeInUp" data-wow-delay="0.5s">
                <form action="#" class="banner-search-form">
                    <input type="text" placeholder="Search or ask a question..">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
                <!-- /.banner-search-form -->
            </div>
            <!-- /.banner-search-form-wrapper -->
        </div>
        <!-- /.banner-content-wrapper -->
    </div>
    <!-- /.banner-content -->
    <div class="bottom-shape">
        <img src="{{ asset('frontend/img/home_support/banner-bottom-shape.png') }}" alt="banner">
    </div>
</section>
<!-- /.kbDoc-banner-support -->

<section class="related-communities">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="h_title wow fadeInUp">
                Select your product to find<br>
                Related communities
            </h2>
        </div>

        <div class="communities-boxes">
            <div class="kbDoc-com-box wow fadeInRight" data-wow-delay="0.5s">
                <div class="icon-container">
                    <img src="img/home_support/rc1.png" alt="communinity-box">
                </div>
                <div class="kbDoc-com-box-content">
                    <h3 class="title"><a href="forums.html"> Getting Started</a></h3>
                    <p class="total-post">453 Posts</p>
                </div>
                <!-- /.kbDoc-com-box-content -->
            </div>
            <!-- /.kbDoc-com-box -->

            <div class="kbDoc-com-box wow fadeInRight" data-wow-delay="0.7s">
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

            <div class="kbDoc-com-box wow fadeInRight" data-wow-delay="0.9s">
                <div class="icon-container">
                    <img src="img/home_support/rc3.png" alt="communinity-box">
                </div>
                <div class="kbDoc-com-box-content">
                    <h3 class="title"><a href="forums.html"> Solar System</a></h3>
                    <p class="total-post">120 Posts</p>
                </div>
                <!-- /.kbDoc-com-box-content -->
            </div>
            <!-- /.kbDoc-com-box -->

            <div class="kbDoc-com-box wow fadeInRight" data-wow-delay="1.1s">
                <div class="icon-container">
                    <img src="img/home_support/rc4.png" alt="communinity-box">
                </div>
                <div class="kbDoc-com-box-content">
                    <h3 class="title"><a href="forums.html"> Cloud Server</a></h3>
                    <p class="total-post">235 Posts</p>
                </div>
                <!-- /.kbDoc-com-box-content -->
            </div>
            <!-- /.kbDoc-com-box -->

            <div class="kbDoc-com-box wow fadeInRight" data-wow-delay="1.3s">
                <div class="icon-container">
                    <img src="img/home_support/rc5.png" alt="communinity-box">
                </div>
                <div class="kbDoc-com-box-content">
                    <h3 class="title"><a href="forums.html"> Integrate Quickly</a></h3>
                    <p class="total-post">542 Posts</p>
                </div>
                <!-- /.kbDoc-com-box-content -->
            </div>
            <!-- /.kbDoc-com-box -->

        </div>
        <!-- /.communities-boxes -->


        <div class="more-communities">

            <a href="#more-category" class="collapse-btn">More Communities <i class="icon_plus"></i></a>

            <div class="collapse-wrap" id="more-category">
                <div class="communities-boxes">
                    <div class="kbDoc-com-box">
                        <div class="icon-container">
                            <img src="img/home_support/rc6.png" alt="communinity-box">
                        </div>
                        <div class="kbDoc-com-box-content">
                            <h3 class="title"><a href="forums.html">Deployment</a></h3>
                            <p class="total-post">453 Posts</p>
                        </div>
                        <!-- /.kbDoc-com-box-content -->
                    </div>
                    <!-- /.kbDoc-com-box -->

                    <div class="kbDoc-com-box">
                        <div class="icon-container">
                            <img src="img/home_support/rc7.png" alt="communinity-box">
                        </div>
                        <div class="kbDoc-com-box-content">
                            <h3 class="title"><a href="forums.html">Configuration</a></h3>
                            <p class="total-post">624 Posts</p>
                        </div>
                        <!-- /.kbDoc-com-box-content -->
                    </div>
                    <!-- /.kbDoc-com-box -->

                    <div class="kbDoc-com-box">
                        <div class="icon-container">
                            <img src="img/home_support/rc8.png" alt="communinity-box">
                        </div>
                        <div class="kbDoc-com-box-content">
                            <h3 class="title"><a href="forums.html">App Management</a></h3>
                            <p class="total-post">120 Posts</p>
                        </div>
                        <!-- /.kbDoc-com-box-content -->
                    </div>
                    <!-- /.kbDoc-com-box -->

                    <div class="kbDoc-com-box">
                        <div class="icon-container">
                            <img src="img/home_support/rc9.png" alt="communinity-box">
                        </div>
                        <div class="kbDoc-com-box-content">
                            <h3 class="title"><a href="forums.html">Marketplaces</a></h3>
                            <p class="total-post">235 Posts</p>
                        </div>
                        <!-- /.kbDoc-com-box-content -->
                    </div>
                    <!-- /.kbDoc-com-box -->

                    <div class="kbDoc-com-box">
                        <div class="icon-container">
                            <img src="img/home_support/rc10.png" alt="communinity-box">
                        </div>
                        <div class="kbDoc-com-box-content">
                            <h3 class="title"><a href="forums.html">Integrate Quickly</a></h3>
                            <p class="total-post">542 Posts</p>
                        </div>
                        <!-- /.kbDoc-com-box-content -->
                    </div>
                    <!-- /.kbDoc-com-box -->

                    <div class="kbDoc-com-box">
                        <div class="icon-container">
                            <img src="img/home_support/rc12.png" alt="communinity-box">
                        </div>
                        <div class="kbDoc-com-box-content">
                            <h3 class="title"><a href="forums.html">Integrate Quickly</a></h3>
                            <p class="total-post">542 Posts</p>
                        </div>
                        <!-- /.kbDoc-com-box-content -->
                    </div>
                    <!-- /.kbDoc-com-box -->

                    <div class="kbDoc-com-box">
                        <div class="icon-container">
                            <img src="img/home_support/rc13.png" alt="communinity-box">
                        </div>
                        <div class="kbDoc-com-box-content">
                            <h3 class="title"><a href="forums.html">Go Global</a></h3>
                            <p class="total-post">542 Posts</p>
                        </div>
                        <!-- /.kbDoc-com-box-content -->
                    </div>
                    <!-- /.kbDoc-com-box -->

                    <div class="kbDoc-com-box">
                        <div class="icon-container">
                            <img src="img/home_support/rc14.png" alt="communinity-box">
                        </div>
                        <div class="kbDoc-com-box-content">
                            <h3 class="title"><a href="#">Customize</a></h3>
                            <p class="total-post">542 Posts</p>
                        </div>
                        <!-- /.kbDoc-com-box-content -->
                    </div>
                    <!-- /.kbDoc-com-box -->

                    <div class="kbDoc-com-box">
                        <div class="icon-container">
                            <img src="img/home_support/rc15.png" alt="communinity-box">
                        </div>
                        <div class="kbDoc-com-box-content">
                            <h3 class="title"><a href="forums.html">From Commissions</a></h3>
                            <p class="total-post">542 Posts</p>
                        </div>
                        <!-- /.kbDoc-com-box-content -->
                    </div>
                    <!-- /.kbDoc-com-box -->
                    <div class="kbDoc-com-box">
                        <div class="icon-container">
                            <img src="img/home_support/rc16.png" alt="communinity-box">
                        </div>

                        <div class="kbDoc-com-box-content">
                            <h3 class="title"><a href="forums.html">Service Based</a></h3>
                            <p class="total-post">542 Posts</p>
                        </div>
                        <!-- /.kbDoc-com-box-content -->
                    </div>
                    <!-- /.kbDoc-com-box -->
                </div>
                <!-- /.communities-boxes -->
            </div>
            <!-- /.collapse-wrap -->
        </div>
        <!-- /.more-communities -->
    </div>
    <!-- /.container -->
</section>
<!-- /.related-communities -->


<section class="funfact-area">
    <div class="container">
        <div class="smile has-animation">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="260px"
                height="260px" xml:space="preserve">
                <path stroke-linecap="round" class="path" fill="none" stroke="#fbe1db" stroke-linecap="round"
                    stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"
                    d="M100.000,200.000 C44.860,200.000 -0.000,155.139 -0.000,100.000 C-0.000,44.860 44.860,-0.001 100.000,-0.001 C155.141,-0.001 200.000,44.860 200.000,100.000 C200.000,155.139 155.140,200.000 100.000,200.000 ZM160.496,34.528 C144.586,19.816 123.327,10.811 100.000,10.811 C50.821,10.811 10.811,50.821 10.811,100.000 C10.811,114.898 14.488,128.952 20.975,141.310 C25.233,149.424 30.703,156.808 37.146,163.216 C53.281,179.259 75.502,189.188 100.000,189.188 C149.179,189.188 189.189,149.178 189.189,100.000 C189.189,86.241 186.056,73.201 180.468,61.553 C175.556,51.315 168.745,42.155 160.496,34.528 ZM99.809,155.403 C97.481,155.403 95.146,155.272 92.807,155.002 C74.591,152.901 57.749,142.414 47.755,126.949 L56.835,121.081 C65.094,133.861 79.004,142.528 94.047,144.262 C113.349,146.489 132.625,137.389 143.164,121.081 L152.245,126.949 C140.768,144.708 120.724,155.403 99.809,155.403 ZM134.235,88.513 C128.265,88.513 123.424,83.673 123.424,77.702 C123.424,71.731 128.265,66.891 134.235,66.891 C140.206,66.891 145.047,71.731 145.047,77.702 C145.047,83.673 140.206,88.513 134.235,88.513 ZM67.343,88.513 C61.372,88.513 56.532,83.673 56.532,77.702 C56.532,71.731 61.372,66.891 67.343,66.891 C73.313,66.891 78.154,71.731 78.154,77.702 C78.154,83.673 73.313,88.513 67.343,88.513 Z" />
            </svg>
        </div>
        <!-- /.smile -->

        <div class="section_title text-center">
            <h2 class="h_title wow fadeInUp">
                Over 1200+<br>
                completed work & Still counting.
            </h2>
        </div>

        <div class="funfact-boxes">
            <div class="funfact-box text-center color-one wow fadeInRight" data-wow-delay="0.3s">
                <div class="fanfact-icon">
                    <img src="img/home_support/fun-fact-1.png" alt="funfact">
                </div>
                <div class="counter">842</div>
                <h3 class="title">Users</h3>
            </div>
            <!-- /.funfact-box -->

            <div class="funfact-box text-center color-two wow fadeInRight" data-wow-delay="0.5s">
                <div class="fanfact-icon">
                    <img src="img/home_support/fun-fact-2.png" alt="funfact">
                </div>
                <div class="counter">10,23</div>
                <h3 class="title">Topics</h3>
            </div>
            <!-- /.funfact-box text-center -->

            <div class="funfact-box text-center color-three wow fadeInRight" data-wow-delay="0.7s">
                <div class="fanfact-icon">
                    <img src="img/home_support/fun-fact-3.png" alt="funfact">
                </div>
                <div class="counter">196</div>
                <h3 class="title">Forums</h3>
            </div>
            <!-- /.funfact-box text-center -->

            <div class="funfact-box text-center color-four wow fadeInRight" data-wow-delay="0.9s">
                <div class="fanfact-icon">
                    <img src="img/home_support/fun-fact-4.png" alt="funfact">
                </div>
                <div class="counter">650</div>
                <h3 class="title">Replies</h3>
            </div>
            <!-- /.funfact-box text-center -->

            <div class="funfact-box text-center color-five wow fadeInRight" data-wow-delay="1.1s">
                <div class="fanfact-icon">
                    <img src="img/home_support/fun-fact-5.png" alt="funfact">
                </div>
                <div class="counter">364</div>
                <h3 class="title">Tags</h3>
            </div>
            <!-- /.funfact-box text-center -->
        </div>
        <!-- /.fun-fact-boxes -->
    </div>
    <!-- /.container -->
</section>
<!-- /.funfact-area -->

<section class="community-posts-area">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="h_title wow fadeInUp">
                Tanya Jawab Seputar SPBE
            </h2>
            <!--p class="wow fadeInUp" data-wow-delay="0.3s">
                Me old mucker chimney pot bodge so I said Oxford my lady show off show off
                pick your nose and blow off cack cheesed.!
            </p!-->
        </div>

        <div class="community-posts-wrapper">
            @foreach ($tanya as $question)
            <div class="community-post wow fadeInUp" data-wow-delay="0.5s">

                <div class="post-content">
                    <div class="author-avatar">
                        <img src="{{ asset('frontend/img/home_support/cp1.png') }}" alt="community post">
                    </div>
                    <div class="entry-content">
                        <h3 class="post-title"><a href="{{ url('tanyajawab/'.$question->id )}}">{{ str_limit($question->judul, $limit = 60, $end = '...') }}</a></h3>
                        <p>{{ $question->created_at }}</p>
                    </div>
                </div>
                <div class="post-meta-wrapper">
                    <ul class="post-meta-info">
                        <li><a href="#"><i class="fas fa-eye"></i>478</a></li>
                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                        <li><a href="#"><i class="icon_like_alt"></i>5</a></li>
                    </ul>
                </div>

            </div>
            @endforeach
            <!-- /.community-post -->
        </div>
        <!-- /.community-posts-wrapper -->

        <div class="button-container text-center">
            <a href="{{ route('frontend.qna') }}" class="doc_border_btn btn-round border-light all_doc_btn wow fadeInUp animated">
                Lihat pertanyaan lainnya
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="11px">
                    <path fill-rule="evenodd"  fill="rgb(16, 179, 214)"  d="M13.034,0.006 L12.323,0.738 L15.227,4.980 L-0.000,4.981 L-0.000,6.015 L15.227,6.015 L12.323,10.258 L13.034,10.990 L18.000,5.864 L18.000,5.131 L13.034,0.006 Z"/>
               </svg>
            </a>
        </div>
        <!-- /.button-container -->
    </div>
    <!-- /.container -->
</section>
<!-- /.community-posts-area -->

<section class="communities">
    <div class="container">
        <div class="section_title title-img text-center">

            <img src="{{ asset('frontend/img/home_support/com_sm.png') }}" alt="community">

            <h2 class="title-lg wow fadeInUp">
                Punya Pertanyaan Seputar SPBE?
            </h2>

            <a href="{{ route('frontend.qna.tanya') }}" class="action_btn wow fadeInUp" data-wow-delay="0.3s"> Tanya Kami <i class="arrow_right"></i></a>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.communities -->
@endsection
