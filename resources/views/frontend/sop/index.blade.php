@extends('frontend.layouts.app')
@section('title', 'SOP')
@section('main-content')
@include('frontend.layouts.breadcrumbs')
<section class="doc_faq_area_two sec_pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="fact_navigation_info">
                    <h4 class="c_head">Daftar @yield('title')</h4>
                    <ul class="nav nav-tabs fact_navigation" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="online-tab" data-toggle="tab" href="#online" role="tab"
                               aria-controls="online" aria-selected="true"><i class="icon_folder-alt"></i>SOP Sarana & Prasarana TIK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="online1-tab" data-toggle="tab" href="#online1" role="tab"
                               aria-controls="online1" aria-selected="false"><i class="icon_cloud-upload_alt"></i>SOP Persandian & Keamanan Sistem Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="online2-tab" data-toggle="tab" href="#online2" role="tab"
                               aria-controls="online2" aria-selected="false"><i class="icon_key_alt"></i>SOP Pengembangan Kebijakan & Aplikasi Informatika</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="tab-content pl_70" id="myTabContent">
                            <div class="tab-pane faq_tab_pane fade show active" id="online" role="tabpanel"
                                aria-labelledby="online-tab">
                                @foreach ($file as $sop1)
                                @if ($sop1['kategori_id'] == "7")
                                <div class="accordion doc_faq_info" id="accordion{{ $sop1->id }}">
                                    <div class="card wow fadeInUp">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse{{ $sop1->id }}" aria-expanded="true"
                                                        aria-controls="collapse{{ $sop1->id }}">
                                                    {{ $sop1->nama }}<i class="icon_plus"></i><i
                                                        class="icon_minus-06"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse{{ $sop1->id }}" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordion{{ $sop1->id }}">
                                            <div class="card-body">
                                                <?php $file = (json_decode($sop1->file))[0]->download_link; ?>
                                            <iframe src="{{ Voyager::image( $file ) }}" frameborder="0" style="min-height:100vh;width:100%" ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <div class="tab-pane faq_tab_pane fade show active" id="online1" role="tabpanel"
                                aria-labelledby="online-tab">
                                @foreach ($file2 as $sop2)
                                @if ($sop2['kategori_id'] == "8")
                            <div class="accordion doc_faq_info" id="accordion{{ $sop2->id }}">
                                <div class="card wow fadeInUp">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse{{ $sop2->id }}" aria-expanded="true"
                                                    aria-controls="collapse{{ $sop2->id }}">
                                                {{ $sop2->nama }}<i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $sop2->id }}" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordion{{ $sop2->id }}">
                                        <div class="card-body">
                                            <?php $file = (json_decode($sop2->file))[0]->download_link; ?>
                                        <iframe src="{{ Voyager::image( $file ) }}" frameborder="0" style="min-height:100vh;width:100%" ></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="tab-pane faq_tab_pane fade show active" id="online2" role="tabpanel"
                        aria-labelledby="online-tab">
                        @foreach ($file3 as $sop3)
                        @if ($sop3['kategori_id'] == "9")
                        <div class="accordion doc_faq_info" id="accordion{{ $sop3->id }}">
                            <div class="card wow fadeInUp">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapse{{ $sop3->id }}" aria-expanded="true"
                                                aria-controls="collapse{{ $sop3->id }}">
                                            {{ $sop3->nama }}<i class="icon_plus"></i><i
                                                class="icon_minus-06"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse{{ $sop3->id }}" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordion{{ $sop3->id }}">
                                    <div class="card-body">
                                        <?php $file = (json_decode($sop3->file))[0]->download_link; ?>
                                    <iframe src="{{ Voyager::image( $file ) }}" frameborder="0" style="min-height:100vh;width:100%" ></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
