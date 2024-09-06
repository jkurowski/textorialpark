@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => 'livebg.jpg'])
@stop

@section('content')
    <section id="content" class="container container-dashed">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-6 pe-5">
                        <a href="https://textorialpark.com/img/live-map-big.jpg" data-lity="">
                            <img src="https://textorialpark.com/img/live-map.jpg" alt="Live - mapa" class="">
                        </a>
                    </div>
                    <div class="col-6 text-left">
                        @if($current_locale == 'pl')
                        <div>
                            <div class="o-nas-page-title bg-gray text-center f300 mb-4">W ŁODZI, <font class="f400">W CENTRUM EUROPY</font></div>
                            <div class="text-container">
                                <p>Położenie miasta na przecięciu europejskich tras autostradowych sprawia, <b>że&nbsp;Łódź zajmuje wyjątkowe miejsce na mapie Europy</b>. Siatka połączeń lotniczych, kolejowych i autostradowych ułatwia podróże krajowe i międzynarodowe.</p>
                                <p>&nbsp;</p>
                                <p>Łódź to czwarte pod względem liczby mieszkańców miasto w Polsce.</p>
                                <p>&nbsp;</p>
                                <p>Bliskość Łodzi do stolicy kraju (zaledwie 140 kilometrów) sprawia, że coraz częściej także i&nbsp;stamtąd wracają łodzianie, którzy wyjechali kiedyś w&nbsp;poszukiwaniu pracy.</p>
                            </div>
                        </div>
                        @else
                        <div>
                            <div class="o-nas-page-title bg-gray text-center f300 mb-4">IN ŁÓDŹ, IN THE, <font class="f400">HEART OF EUROPE</font></div>
                            <div class="text-container">
                                <p>The location of the city at the crossroads of european motorways <b>places Łódź in a very special place on the map of europe</b>. the broad network of air, railroad and motorway connections, has made the comfort of travelling much higher, for both domestic and international travel.</p>
                                <p>&nbsp;</p>
                                <p>Łódź is the fourth largest city in Poland in terms of population.</p>
                                <p>&nbsp;</p>
                                <p>The nearness of Łódź to the country’s capital, situated only 140 kilometres away, is attracting commuters and prospective residents to the city and strengthening economic interactions in general.</p>
                            </div>
                        </div>
                        @endif
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
                        @if($current_locale == 'pl')
                        <div class="text-line bg-red text-center">ATUTY <font class="f400">LOKALIZACJI</font></div>
                        <img src="https://textorialpark.com/img/live3.jpg" class="img-fluid" alt="Atuty lokalizacji Textorial Park II">
                        <div class="live-atuty-box">
                            <div class="live-atuty-box-item">historyczny charakter miejsca – bogate tradycje</div>
                            <div class="live-atuty-box-item">obszar o dużym potencjale miastotwórczym</div>
                            <div class="live-atuty-box-item">rozpoznawalna marka Księżego Młyna</div>
                            <div class="live-atuty-box-item">bogata baza mieszkaniowa dla pracowników – lofty, rewitalizowane famuły</div>
                            <div class="live-atuty-box-item">dobry dostęp do komunikacji miejskiej</div>
                        </div>
                        @else
                        <div class="text-line bg-red text-center">LOCATION <font class="f400">(KEY ADVANTAGES)</font></div>
                        <img src="https://textorialpark.com/img/live3.jpg" class="img-fluid" alt="Atuty lokalizacji Textorial Park II">
                        <div class="live-atuty-box">
                            <div class="live-atuty-box-item">the historic legacy of the place and its rich traditions</div>
                            <div class="live-atuty-box-item">the entire area shows strong "city-forming" potential</div>
                            <div class="live-atuty-box-item">the recognisable brand of księży Młyn itself</div>
                            <div class="live-atuty-box-item">the rich residential offer for employees: loft apartments, revitalised "famuły”</div>
                            <div class="live-atuty-box-item">good access to public transport</div>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="row mt-5 pt-5">
                    <div class="col-12 position-relative">
                        @if($current_locale == 'pl')
                        <div class="text-line text-line-right bg-green text-center">Z NATURY <font class="f400">ZIELONY</font></div>
                        <img src="https://textorialpark.com/img/live4.jpg" class="img-fluid" alt="Z natury zielony">
                        <div class="lines-box text-right">
                            <ul class="mb-0 list-unstyled">
                                <li class="d-flex justify-content-end"><span class="line-box bg-green">Park Źródliska – 1&nbsp;min&nbsp;spacerem</span></li>
                                <li class="d-flex justify-content-end"><span class="line-box bg-green">Palmiarnia Ogrodu Botanicznego – 5&nbsp;min&nbsp;spacerem</span></li>
                                <li class="d-flex justify-content-end"><span class="line-box bg-green">Park Nad Jasieniem – 10&nbsp;min&nbsp;spacerem</span></li>
                            </ul>
                        </div>
                        @else
                        <div class="text-line text-line-right bg-green text-center">GREEN <font class="f400">BY NATURE</font></div>
                        <img src="https://textorialpark.com/img/live4.jpg" class="img-fluid" alt="Z natury zielony">
                        <div class="lines-box text-right">
                            <ul class="mb-0 list-unstyled">
                                <li class="d-flex justify-content-end"><span class="line-box bg-green">Park Źródliska – 1 minute on foot</span></li>
                                <li class="d-flex justify-content-end"><span class="line-box bg-green">Palm House (Botanical Garden)  – 5 minutes on foot</span></li>
                                <li class="d-flex justify-content-end"><span class="line-box bg-green">Park Nad Jasieniem – 10 minutes on foot</span></li>
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection