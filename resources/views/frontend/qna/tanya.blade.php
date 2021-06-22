@extends('frontend.layouts.app')
@section('title', 'Tanya | QnA')
@section('main-content')
@include('frontend.layouts.breadcrumbs')
<section class="contact_area">
    <div class="container">
        <div class="contact_info">
            <div class="section_title text-left">
                <h2 class="h_title wow fadeInUp">Let’s start the conversation</h2>
                <p>Please email us, we’ll happy to assist you.</p>
            </div>
            @if(isset($flag) && $flag === 1)
            <div class="alert media message_alert alert-success fade show" role="alert">
                <i class=" icon_check_alt2"></i>
                <div class="media-body">
                    <h5>Terima kasih telah memberikan pertanyaan Anda</h5>
                    <p>Kami akan segera menjawab, silahkan pantau pertanyaan Anda <a href="#">disini</a></p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="icon_close"></i>
                    </button>
                </div>
            </div>
            @endif
            <form method="POST" action="{{ route('frontend.qna.store') }}" class="contact_form">
                @csrf
                <div class="row contact_fill">
                    <div class="col-lg-4 form-group">
                        <h6>Full Name</h6>
                        <input type="text" class="form-control" name="nama" placeholder="Enter your name here">
                    </div>
                    <div class="col-lg-4 form-group">
                        <h6>Email</h6>
                        <input type="email" class="form-control" name="email" placeholder="email@mail.com">
                    </div>
                    <div class="col-lg-4 form-group">
                        <h6>Subjek</h6>
                        <input type="text" class="form-control" name="judul" placeholder="Subjek">
                    </div>
                    <div class="col-lg-12 form-group">
                        <h6>Message</h6>
                        <textarea class="form-control message" name="isi" placeholder="Enter Your Text ..."></textarea>
                    </div>
                    <div class="col-lg-12 form-group">
                        <button type="submit" class="btn action_btn thm_btn">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
