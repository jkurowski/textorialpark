@extends('layouts.page')

@section('meta_title', 'Kontakt')
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => $page->header])
@stop

@section('content')
    <div id="video" class="container-fluid">
        <div class="row">
            <div class="col-md-1 off992"></div>
            <div class="col-lg-10 col-md-12 hp-video-col text-center">
                <div class="historia-sec-1">
                    <div class="text-line bg-red text-center"><font class="f400">ST. PAUL'S DEVELOPMENTS</font> POLSKA</div>
                    <img src="{{ asset('images/kontakt1.jpg') }}" class="img-fluid" alt="St Pauls Development Polska">
                    <div class="text-box bg-red kontakt-text-box">
                        {!! parse_text($page->content) !!}
                    </div>

                    <div class="kontakt-lines-box">
                        <div class="text-line bg-red text-center kontakt-line"><font class="f400">BĄDŹMY</font> W KONTAKCIE &nbsp;
                            <a href="https://www.facebook.com/textorialpark/">
                                <img src="{{ asset('images/fb-ico.png') }}" alt="Facebook Logo" class="kontakt-social">
                            </a>
                            <a href="https://www.instagram.com/textorial_park/">
                                <img src="{{ asset('images/insta-ico.png') }}" alt="Instagram Logo" class="kontakt-social">
                            </a>
                        </div>
                        <div class="text-line bg-red text-center kontakt-line">
                            <a href="https://www.youtube.com/watch?v=1oHo6VofwD0" style="color:#ffffff">
                                <font class="f400">FILM</font> VIDEO ETAP II
                            </a>
                        </div>
                        <div class="text-line bg-red text-center kontakt-line">
                            <a href="img/broszura.pdf" style="color:#ffffff">
                                <font class="f400">BROSZURA ETAP II</font> DO POBRANIA
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-1 off992"></div>
        </div>
    </div>
@endsection