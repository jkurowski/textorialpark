@extends('layouts.page')

@section('meta_title', 'Kontakt')
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Live', 'header_file' => 'hpbg2.jpg'])
@stop

@section('content')
    <section class="container container-dashed">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-6 pe-5">
                        <a href="https://textorialpark.com/img/live-map-big.jpg" data-lity="">
                            <img src="https://textorialpark.com/img/live-map.jpg" alt="Live - mapa" class="">
                        </a>
                    </div>
                    <div class="col-6 text-left d-flex align-items-center">
                        <div>
                            <div class="o-nas-page-title bg-gray text-center f300 mb-4">W ŁODZI, <font class="f400">W CENTRUM EUROPY</font></div>
                            <div class="text-container">
                                <p>Położenie miasta na przecięciu europejskich tras autostradowych sprawia, <b>że&nbsp;Łódź zajmuje wyjątkowe miejsce na mapie Europy</b>. Siatka połączeń lotniczych, kolejowych i&nbsp;autostradowych ułatwia podróże krajowe i&nbsp;międzynarodowe.</p>
                                <p>&nbsp;</p>
                                <p>Łódź to trzecie pod względem liczby mieszkańców miasto w&nbsp;Polsce.</p>
                                <p>&nbsp;</p>
                                <p>Bliskość Łodzi do stolicy kraju (zaledwie 140 kilometrów) sprawia, że coraz częściej także i&nbsp;stamtąd wracają łodzianie, którzy wyjechali kiedyś w&nbsp;poszukiwaniu pracy.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 pt-5">
                    <div class="col-3"></div>
                    <div class="col-9 text-right">
                        <img src="https://textorialpark.com/img/live-longlat.png" class="img-fluid" alt="Współrzędne">
                    </div>
                </div>

                <div class="row mt-5 pt-5">
                    <div class="col-12 text-center">
                        <img src="https://textorialpark.com/img/live2.jpg" class="img-fluid" alt="Live">
                    </div>
                </div>

                <div class="row mt-5 pt-5">
                    <div class="col-12 position-relative">
                        <div class="text-line bg-red text-center">ATUTY <font class="f400">LOKALIZACJI</font></div>
                        <img src="https://textorialpark.com/img/live3.jpg" class="img-fluid" alt="Atuty lokalizacji Textorial Park II">
                        <div class="live-atuty-box">
                            <div class="live-atuty-box-item">historyczny charakter miejsca – bogate tradycje</div>
                            <div class="live-atuty-box-item">obszar o dużym potencjale miastotwórczym</div>
                            <div class="live-atuty-box-item">rozpoznawalna marka Księżego Młyna</div>
                            <div class="live-atuty-box-item">bogata baza mieszkaniowa dla pracowników – lofty, rewitalizowane famuły</div>
                            <div class="live-atuty-box-item">dobry dostęp do komunikacji miejskiej</div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 pt-5">
                    <div class="col-12 position-relative">
                        <div class="text-line text-line-right bg-green text-center">Z NATURY <font class="f400">ZIELONY</font></div>
                        <img src="https://textorialpark.com/img/live4.jpg" class="img-fluid" alt="Z natury zielony">
                        <div class="lines-box text-right">
                            <span class="line-box bg-green">Park Źródliska – 1&nbsp;min&nbsp;spacerem</span><br>
                            <span class="line-box bg-green">Palmiarnia Ogrodu Botanicznego – 5&nbsp;min&nbsp;spacerem</span><br>
                            <span class="line-box bg-green">Park Nad Jasieniem – 10&nbsp;min&nbsp;spacerem</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection