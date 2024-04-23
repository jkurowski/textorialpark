@extends('layouts.homepage')

@section('content')
    <header class="masthead text-center text-white d-flex ptb-0">
        <div id="zoominheader" style="background-image:url('{{ asset('uploads/headers/hpbg2.jpg') }}')">
            <div class="zoomoutheader">
                <div class="zoomoutinsider">
                    <div class="zoomoutinsider2">
                        <a href="{{ route('front.live') }}" id="hplive" class="hp-switcher aktywny">LIVE</a><br>
                        <a href="{{ route('front.work') }}" id="hpwork" class="hp-switcher">WORK</a><br>
                        <a href="{{ route('front.enjoy') }}" id="hpenjoy" class="hp-switcher">ENJOY</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div style="background: white" class="position-relative">
        <section class="container container-dashed" id="video" style="padding-bottom: 100px">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-md-12">
                            <div style="position:relative;display:inline-block">
                                <a href="{{ route('front.plan') }}" class="banerek">
                                    <img src="{{ asset('images/baner-wynajem.png') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="mainNews">
            <section class="container position-relative pt-0">
                <div class="row justify-content-center">
                    <div class="col-10">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="o-nas-page-title bg-gray text-center f300 uptop odjazd"><font class="f400">NEWS</font>BOARD</div>
                            </div>
                        </div>

                        <div class="row newsboard-list-row">
                            @foreach($articles as $article)
                                <div class="col-md-3 text-center">
                                    <a href="{{route('front.news.show', $article->slug)}}">
                                        <img src="{{asset('/uploads/articles/square/'.$article->file_square) }}" alt="{{ $article->file_alt }}" width="700" height="394" class="golden-border w-100">
                                    </a>
                                    <img src="{{ asset('images/arrowdown.png') }}" class="hp-news-arrow mt-3 m-auto" alt="">
                                    <div class="hp-news-title"><a href="{{route('front.news.show', $article->slug)}}">{{ $article->title }}</a></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="container container-dashed" style="padding-top: 100px">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-12 position-relative">
                            <div class="text-line text-line-right bg-red text-center">KAMPUS <font class="f400">TEXTORIAL PARK</font></div>
                            <img src="{{ asset('images/hpgal1.jpg') }}" class="img-fluid" alt="Kampus Textorial Park">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 slick-carousel mt-4">
                            <div class="row">
                                @foreach($images as $p)
                                    <div class="col-3">
                                        <a href="/uploads/gallery/images/{{$p->file}}" class="swipebox" rel="gallery-1" title="">
                                            <picture>
                                                <source type="image/webp" srcset="{{asset('uploads/gallery/images/thumbs/webp/'.$p->file_webp) }}">
                                                <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/thumbs/'.$p->file) }}">
                                                <img src="{{asset('uploads/gallery/images/thumbs/'.$p->file) }}" alt="{{ $p->name }}">
                                            </picture>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5 pt-5">
                        <div class="col-12">
                            <a href="https://www.youtube.com/watch?v=ufgrXoJvZ-E" class="swipebox" rel="gallery-2" title="">
                                <img src="{{ asset('images/hpvideo2x.jpg') }}" class="img-fluid" alt="Zobacz video">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/slick.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".slick-carousel .row").slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 4000,
                dots: false,
            });
        });
    </script>
@endpush