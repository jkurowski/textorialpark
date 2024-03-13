@extends('layouts.page')

@section('meta_title', 'Kontakt')
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => $page->header])
@stop

@section('content')
    <div id="content"></div>
    <section class="container container-dashed">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-12 position-relative">
                        <div class="text-line bg-red text-center"><font class="f400">ST. PAUL'S DEVELOPMENTS</font> POLSKA</div>
                        <img src="{{ asset('images/kontakt1.jpg') }}" class="img-fluid" alt="St Pauls Development Polska">
                        <div class="text-box bg-red kontakt-text-box">
                            {!! parse_text($page->content) !!}
                        </div>

                        <div class="kontakt-lines-box">
                            <div class="text-line bg-red text-center kontakt-line">
                                <strong class="me-1">BĄDŹMY</strong>W KONTAKCIE
                                <a href="https://www.facebook.com/textorialpark/" target="_blank" class="ms-4">
                                    <img src="{{ asset('images/fb-ico.png') }}" alt="Facebook Logo" class="kontakt-social">
                                </a>
                                <a href="https://www.instagram.com/textorial_park/" target="_blank" class="ms-2">
                                    <img src="{{ asset('images/insta-ico.png') }}" alt="Instagram Logo" class="kontakt-social">
                                </a>
                                <a href="https://www.linkedin.com/company/textorial-park-ii/" target="_blank" class="ms-2">
                                    <img src="{{ asset('images/linkedin-ico.png') }}" alt="LinkedIn Logo" class="kontakt-social">
                                </a>
                                <a href="https://www.youtube.com/@textorialpark539" target="_blank" class="ms-2">
                                    <img src="{{ asset('images/yt-ico.png') }}" alt="YouTube Logo" class="kontakt-social">
                                </a>
                            </div>
                            <div class="text-line bg-red text-center kontakt-line">
                                <a href="https://www.youtube.com/watch?v=ufgrXoJvZ-E" class="swipebox" style="color:#ffffff">
                                    <strong class="me-1">FILM VIDEO </strong>KSIĘŻY MŁYN
                                </a>
                            </div>
                            <div class="text-line bg-red text-center kontakt-line">
                                <a href="{{ asset('/uploads/files/broszura.pdf') }}" style="color:#ffffff">
                                    <strong class="me-1">BROSZURA </strong>DO POBRANIA
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection