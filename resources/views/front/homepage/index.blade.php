@extends('layouts.homepage')

@section('content')
    <header class="masthead text-center text-white d-flex ptb-0">
        <div id="zoominheader" style="background-image:url('{{ asset('uploads/headers/hpbg2.jpg') }}')">
            <div class="zoomoutheader">
                <div class="zoomoutinsider">
                    <div class="zoomoutinsider2">
                        <a href="/live/" id="hplive" class="hp-switcher aktywny">LIVE</a><br>
                        <a href="/work/" id="hpwork" class="hp-switcher">WORK</a><br>
                        <a href="/enjoy/" id="hpenjoy" class="hp-switcher">ENJOY</a>
                    </div>
                </div>
                <a class="arrow bounce" href="#video"></a>
                <div class="header-social">
                    <a href="https://www.facebook.com/textorialpark/">
                        <img src="{{ asset('images/fb-ico.png') }}" alt="Facebook">
                    </a>

                    <a href="https://www.instagram.com/textorial_park/">
                        <img src="{{ asset('images/insta-ico.png') }}" alt="Instagram">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div id="video" class="container-fluid">
        <div class="row">
            <div class="col-md-1 off992"></div>
            <div class="col-lg-10 col-md-12 hp-video-col text-center ntop" >
                <br class="moff" id="ber">
                <div style="position:relative;display:inline-block">
                    <a href="/do-wynajecia/" class="banerek">
                        <img src="{{ asset('images/baner-wynajem.png') }}" class="img-fluid" alt="">
                    </a>
                    <a id="click" style="position:absolute;top:15px;right:15px;cursor:pointer">
                        <img src="{{ asset('images/closik.jpg') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <br id="ber">
                <br>
                <br class="moff">
            </div>
            <div class="col-md-1 off992"></div>
        </div>
    </div>

    <div id="newsboard" class="container-fluid">
        <div class="row">
            <div class="col-md-1 off992"></div>
            <div class="col-lg-10 col-md-12 hp-video-col-n text-center">

                <div class="row">
                    <div class="col-md-6">
                        <div class="o-nas-page-title bg-gray text-center f300 uptop odjazd"><font class="f400">NEWS</font>BOARD</div>
                    </div>
                </div>

                <br class="moff">

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
            <div class="col-md-1 off992"></div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="text-line text-line-right bg-red text-center">KAMPUS <font class="f400">TEXTORIAL PARK</font></div>
                    <img src="https://textorialpark.com/img/hpgal1.jpg" class="img-fluid" alt="Kampus Textorial Park">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="https://www.youtube.com/watch?v=1oHo6VofwD0" data-lity="">
                        <img src="https://textorialpark.com/img/hpvideo2x.jpg" class="img-fluid" alt="Zobacz video">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div id="instagram" class="container-fluid newsletter bg-red">
        <div class="row">
            <div class="col-md-1 off992"></div>
            <div class="col-lg-10 col-md-12  hpnewsletter">
                <div class="row m-0">
                    <div class="col-sm-12">
                        <h2 class="text-center" style="width:100% !important;font-weight:300;color:#ffffff">TEXTORIAL NA <font class="f400">INSTAGRAMIE</font></h2>
                    </div>
                </div>
                <br>
                <br class="moff">
                <div id="instagram-feed2" class="instagram_feed"></div>
            </div>
            <div class="col-md-1 off992"></div>
        </div>
    </div>
@endsection