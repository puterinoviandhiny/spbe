@extends('frontend.layouts.app')
@section('title', 'Peraturan & Kebijakan')
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
                               aria-controls="online" aria-selected="true"><i class="icon_folder-alt"></i>Undang-undang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="online1-tab" data-toggle="tab" href="#online1" role="tab"
                               aria-controls="online1" aria-selected="false"><i class="icon_cloud-upload_alt"></i>Kebijakan Pusat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="online2-tab" data-toggle="tab" href="#online2" role="tab"
                               aria-controls="online2" aria-selected="false"><i class="icon_key_alt"></i>Kebijakan Daerah</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="tab-content pl_70" id="myTabContent">
                            <div class="tab-pane faq_tab_pane fade show active" id="online" role="tabpanel"
                                aria-labelledby="online-tab">
                                @foreach ($file as $uu)
                                @if ($uu['kategori_id'] == "1")
                                <div class="accordion doc_faq_info" id="accordion{{ $uu->id }}">
                                    <div class="card wow fadeInUp">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse{{ $uu->id }}" aria-expanded="true"
                                                        aria-controls="collapse{{ $uu->id }}">
                                                    {{ $uu->nama }}<i class="icon_plus"></i><i
                                                        class="icon_minus-06"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse{{ $uu->id }}" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordion{{ $uu->id }}">
                                            <div class="card-body">
                                                <?php $file = (json_decode($uu->file))[0]->download_link; ?>
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
                                @foreach ($file2 as $kp)
                                @if ($kp['kategori_id'] == "2")
                            <div class="accordion doc_faq_info" id="accordion{{ $kp->id }}">
                                <div class="card wow fadeInUp">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse{{ $kp->id }}" aria-expanded="true"
                                                    aria-controls="collapse{{ $kp->id }}">
                                                {{ $kp->nama }}<i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $kp->id }}" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordion{{ $kp->id }}">
                                        <div class="card-body">
                                            <?php $file = (json_decode($kp->file))[0]->download_link; ?>
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
                        @foreach ($file3 as $kd)
                        @if ($kd['kategori_id'] == "3")
                        <div class="accordion doc_faq_info" id="accordion{{ $kd->id }}">
                            <div class="card wow fadeInUp">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapse{{ $kd->id }}" aria-expanded="true"
                                                aria-controls="collapse{{ $kd->id }}">
                                            {{ $kd->nama }}<i class="icon_plus"></i><i
                                                class="icon_minus-06"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse{{ $kd->id }}" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordion{{ $kd->id }}">
                                    <div class="card-body">
                                        <?php $file = (json_decode($kd->file))[0]->download_link; ?>
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
