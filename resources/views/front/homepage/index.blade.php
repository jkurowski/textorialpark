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
                <a class="arrow bounce" href="#video"></a>
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
                            <div class="col-md-3 text-center">
                                <a href="textorial-park-z-nowym-najemca">
                                    <img src="https://textorialpark.com/img/newsboard/Textorial-Park-z-nowym-najemca-square.jpg" class="img-fluid newsboardimg" alt="">
                                </a>
                                <img src="{{ asset('images/arrowdown.png') }}" class="hp-news-arrow" alt="">
                                <div class="hp-news-title"><a href="textorial-park-z-nowym-najemca">Textorial Park <b>z nowym najemcą</b></a></div>
                            </div>

                            <div class="col-md-3 text-center">
                                <a href="jesieny-planszowkowy-mlyn">
                                    <img src="https://textorialpark.com/img/newsboard/planszowkowy-mlyn-4-square.png" class="img-fluid newsboardimg" alt="">
                                </a>
                                <img src="{{ asset('images/arrowdown.png') }}" class="hp-news-arrow" alt="">
                                <div class="hp-news-title"><a href="jesieny-planszowkowy-mlyn"><b>Jesienny Planszówkowy Młyn 4.0</b> w Textorial Park</a></div>
                            </div>

                            <div class="col-md-3 text-center">
                                <a href="mabion-na-nastepne-5-lat-w-textorial-park">
                                    <img src="https://textorialpark.com/img/newsboard/mabion-na-nastepne-5-lat-square.jpg" class="img-fluid newsboardimg" alt="">
                                </a>
                                <img src="{{ asset('images/arrowdown.png') }}" class="hp-news-arrow" alt="">
                                <div class="hp-news-title"><a href="mabion-na-nastepne-5-lat-w-textorial-park"><b>Mabion S.A</b> na następne pięć lat w Textorial Park </a></div>
                            </div>

                            <div class="col-md-3 text-center">
                                <a href="spektakl-maly-ksiaze"><img src="https://textorialpark.com/img/newsboard/textorial-park-maly-ksiaze-spektakl-square.jpg" class="img-fluid newsboardimg" alt=""></a>
                                <img src="{{ asset('images/arrowdown.png') }}" class="hp-news-arrow" alt="">
                                <div class="hp-news-title"><a href="spektakl-maly-ksiaze"><b>Spektakl „Mały Książę”</b> 28 sierpnia w Textorial Park</a></div>
                            </div>
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
                            <a href="https://www.youtube.com/watch?v=1oHo6VofwD0" data-lity="">
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