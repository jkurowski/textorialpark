@extends('layouts.page')

@section('meta_title', 'Kontakt')
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Enjoy', 'header_file' => 'enjoybg.jpg'])
@stop

@section('content')
    <section id="content" class="container container-dashed">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    @if($current_locale == 'pl')
                        <div class="col-12 position-relative">
                            <div class="text-line text-line-left bg-red text-center">PRZYJAZNA <font class="f400">PRZESTRZEŃ MIEJSKA</font></div>
                            <img src="https://textorialpark.com/img/oferta2bg.jpg" class="img-fluid" alt="Przyjazna przestrzeń miejska">
                        </div>
                    @else
                        <div class="col-12 position-relative">
                            <div class="text-line text-line-left bg-red text-center">A FRIENDLY <font class="f400">CITY SPACE</font></div>
                            <img src="https://textorialpark.com/img/oferta2bg.jpg" class="img-fluid" alt="Przyjazna przestrzeń miejska">
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-10 slick-carousel mt-5 pt-5">
                <div class="row">
                    <div class="col-3">
                        <a href="https://textorialpark.com/img/enjoy/1m.jpeg" class="swipebox" rel="gal-2">
                            <img src="https://textorialpark.com/img/enjoy/1m.jpeg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://textorialpark.com/img/enjoy/2m.jpeg" class="swipebox" rel="gal-2">
                            <img src="https://textorialpark.com/img/enjoy/2m.jpeg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://textorialpark.com/img/enjoy/3m.jpeg" class="swipebox" rel="gal-2">
                            <img src="https://textorialpark.com/img/enjoy/3m.jpeg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://textorialpark.com/img/enjoy/4m.jpeg" class="swipebox" rel="gal-2">
                            <img src="https://textorialpark.com/img/enjoy/4m.jpeg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>

                    <div class="col-3">
                        <a href="https://textorialpark.com/img/enjoy/5m.jpg" class="swipebox" rel="gal-2">
                            <img src="https://textorialpark.com/img/enjoy/5m.jpg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://textorialpark.com/img/enjoy/6m.jpg" class="swipebox" rel="gal-2">
                            <img src="https://textorialpark.com/img/enjoy/6m.jpg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://textorialpark.com/img/enjoy/7m.jpg" class="swipebox" rel="gal-2">
                            <img src="https://textorialpark.com/img/enjoy/7m.jpg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://textorialpark.com/img/enjoy/8m.jpg" class="swipebox" rel="gal-2">
                            <img src="https://textorialpark.com/img/enjoy/8m.jpg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-10">
                <div class="row mt-5 pt-5">
                    <div class="col-3"></div>
                    @if($current_locale == 'pl')
                    <div class="col-9 text-container text-justify">
                        <p><span class="work-quote-icon me-3" style="color:#85202f"><sup>,,</sup></span>Pijąc kawę w jednej z&nbsp;nowych restauracji na Księżym Młynie, spacerując między odnowionymi czynszówkami łódzkiego osiedla, widząc młodych ludzi wokół biurowców Textorial Park trudno nie odnieść wrażenia, że&nbsp;historia odradza się w tym miejscu z&nbsp;nową energią. Zależy nam, aby była to przestrzeń, którą wybiorą najemcy i&nbsp;w&nbsp;której dobrze poczują się pracownicy ceniący komfort pracy oraz wygodę związaną z dostępnością usług.<span class="work-quote-icon" style="color:#85202f"><sup>,,</sup></span></p>
                        <div class="work-quote-author f400" style="color:#333333">Anna Banaś</div>
                        <div class="work-quote-function f400" style="color:#333333">prezes St. Paul's Developments Polska</div>
                    </div>
                    @else
                    <div class="col-9 text-container text-justify">
                        <p><span class="work-quote-icon me-3" style="color:#85202f"><sup>,,</sup></span>Having coffee in one of the new restaurants at Księży Młyn, walking among the renovated apartments of a Łódź housing estate, seeing all the young people around the textorial Park buildings, it’s hard not to be under the impression that the city’s historical legacy has been given a new life, a new energy. It is important for us that tenants should like to choose this space and that it will appeal to employees who value comfort at work and the convenience of easy access to a variety of services. Through our actions, we’re also implementing our placemaking philosophy. We want this place to set the tone for both lifestyle and work. In the process, Łódź will be enriched by yet another interesting urban space.<span class="work-quote-icon" style="color:#85202f"><sup>,,</sup></span></p>
                        <div class="work-quote-author f400" style="color:#333333">Anna Banaś</div>
                        <div class="work-quote-function f400" style="color:#333333">CEO, St. Paul’s Developments Polska</div>
                    </div>
                    @endif
                </div>

                <div class="row mt-5 pt-5">
                    <div class="col-12 position-relative">
                        <div class="text-line text-line-right bg-red text-center">TEXTORIAL <font class="f400">PARK</font></div>
                        <img src="{{ asset('images/enjoy1xx.jpg') }}" class="img-fluid" alt="Textorial Park II">
                        <div class="lines-box text-right">
                            <ul class="mb-0 list-unstyled">
                                @if($current_locale == 'pl')
                                    <li class="d-flex justify-content-end"><span class="line-box bg-red">restauracja i kantyna</span></li>
                                    <li class="d-flex justify-content-end"><span class="line-box bg-red">amfiteatr, zielone patio</span></li>
                                    <li class="d-flex justify-content-end"><span class="line-box bg-red">muzea, kawiarnie i sklepy w sąsiedztwie</span></li>
                                    <li class="d-flex justify-content-end"><span class="line-box bg-red">Park Źródliska za ogrodzeniem</span></li>
                                    <li class="d-flex justify-content-end"><span class="line-box bg-red">trasy rowerowe w okolicy</span></li>
                                @else
                                    <li class="d-flex justify-content-end"><span class="line-box bg-red">restaurant and cafeteria</span></li>
                                    <li class="d-flex justify-content-end"><span class="line-box bg-red">amphitheatre, green patio</span></li>
                                    <li class="d-flex justify-content-end"><span class="line-box bg-red">museums, coffee shops and shops in the neighbourhood</span></li>
                                    <li class="d-flex justify-content-end"><span class="line-box bg-red">Źródliska Park just outside of the campus</span></li>
                                    <li class="d-flex justify-content-end"><span class="line-box bg-red">cycling paths in the area</span></li>
                                @endif
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mt-5 pt-5">
                    <div class="col-md-6 text-container text-justify align-items-center d-flex position-relative">
                        @if($current_locale == 'pl')
                        <div class="text-line bg-red text-center" style="position:absolute;width:100%;margin-left:0;top:0">JEDNO MIEJSCE, <font class="f400">WIELE DRÓG</font></div>
                        <div>
                            <p>„Coraz więcej ludzi zwraca uwagę na lokalizację biura podczas decyzji wyboru pracy. Najbardziej cenione lokalizacje to centra miast z&nbsp;dużym wyborem udogodnień lokalnych, dobrym transportem publicznym i&nbsp;możliwością dotarcia do biura na rowerze”.</p>
                            <p>&nbsp;</p>
                            <div class="text-end">
                                Raport z badań<br>
                                „Zdrowe Zielone Biura”<br>
                                PLGBC
                            </div>
                            <p>&nbsp;</p>
                            <p>Mniej spalin to lepsza jakość życia. Dlatego w Textorial Park na najemców czeka prawie 200 miejsc postojowych dla rowerów.</p>
                            <p>&nbsp;</p>
                            <p>Każdego dnia na ulice Łodzi wyjeżdża 360 autobusów i&nbsp;240 tramwajów. Przystanki zlokalizowane wokół Textorial Park ułatwią codzienną komunikację.</p>
                        </div>
                        @else
                            <div class="text-line bg-red text-center" style="position:absolute;width:100%;margin-left:0;top:0">ONE PLACE, <font class="f400">MANY ROADS</font></div>
                            <div>
                                <p>„More and more people pay attention to office location when deciding about their future workplace. the most valued locations include city centres, with a wide choice of local amenities, reliable public transport and the possibility to reach their offices by bike”.</p>
                                <p>&nbsp;</p>
                                <div class="text-end">
                                    Excerpt from the<br>
                                    „Zdrowe Zielone Biura”<br>
                                    study by PLGBC<br>
                                    [Green Healthy Offices].
                                </div>
                                <p>&nbsp;</p>
                                <p>Less car combustion means better quality of life. This is why we have secured a special space for the car-sharing programme as well as a few electric-car charging stations.</p>
                                <p>&nbsp;</p>
                                <p>Every day, 360 buses and 240 trams operate on the streets of Łódź. Their stops are located around Textorial Park, making daily commuting much easier.</p>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6 work-sec-1">
                        <img src="https://textorialpark.com/img/enjoy3.jpg" class="img-fluid" alt="bus">
                    </div>
                </div>

                <div class="row mt-5 pt-5">
                    <div class="col-12 position-relative">
                        <img src="https://textorialpark.com/img/enjoy7.jpg" class="img-fluid" alt="Enjoy">
                        <div class="enjoy-bike-right">
                            @if($current_locale == 'pl')
                                <p>Projektując Textorial Park <br>pomyśleliśmy o&nbsp;tym, co ważne dla przyszłych użytkowników.</p>
                                <p>Łódź posiada już ponad 200&nbsp;km ścieżek rowerowych.</p>
                                <p>Opracowaliśmy więc szereg udogodnień dla rowerzystów.</p>
                            @else
                                <p>In designing textorial Park, <br>we have thought about what matters most for our future users.</p>
                                <p>Łódź already boasts over 200 km of bike paths.</p>
                                <p>We have developed multiple bicycle amenities.</p>
                            @endif
                        </div>

                        @if($current_locale == 'pl')
                        <div class="lines-box-left enjoy-bike text-left">
                            <span class="line-box line-box-left bg-red">częściowo zadaszone miejsca dla rowerów<br>na terenie kompleksu</span><br>
                            <span class="line-box line-box-left bg-red">oraz w garażu podziemnym</span><br>
                            <span class="line-box line-box-left bg-red">stacja obsługi rowerów</span><br>
                        </div>
                        @else
                        <div class="lines-box-left enjoy-bike text-left">
                            <span class="line-box line-box-left bg-red">partially covered space for bicycles<br> within the complex</span><br>
                            <span class="line-box line-box-left bg-red">as well as in the underground garages</span><br>
                            <span class="line-box line-box-left bg-red">bike repair station</span><br>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="posters">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    @if($current_locale == 'pl')
                        <h2>LOKALIZACJA <b>BEZ KOMPROMISÓW</b></h2>
                    @else
                        <h2>A GREAT LOCATION <b>WITHOUT COMPROMISING</b></h2>
                    @endif
                </div>
            </div>
            <div class="row pt-5 mt-3">
                <div class="col-12 position-relative d-flex flex-wrap justify-content-center">
                    <a href="https://textorialpark.com/img/polaroid-1b.jpg" class="swipebox" rel="gal-1">
                        <img src="https://textorialpark.com/img/polaroid-1.png" class="polar polaroid-1" alt="Textorial Park II">
                    </a>
                    <a href="https://textorialpark.com/img/polaroid-2b.jpg" class="swipebox" rel="gal-1">
                        <img src="https://textorialpark.com/img/polaroid-2.png" class="polar polaroid-2" alt="Textorial Park II">
                    </a>
                    <a href="https://textorialpark.com/img/polaroid-3b.jpg" class="swipebox" rel="gal-1">
                        <img src="https://textorialpark.com/img/polaroid-3.png" class="polar polaroid-3" alt="Textorial Park II">
                    </a>
                    <a href="https://textorialpark.com/img/polaroid-4b.jpg" class="swipebox" rel="gal-1">
                        <img src="https://textorialpark.com/img/polaroid-4.png" class="polar polaroid-4" alt="Textorial Park II">
                    </a>
                    <a href="https://textorialpark.com/img/polaroid-5b.jpg" class="swipebox" rel="gal-1">
                        <img src="https://textorialpark.com/img/polaroid-5.png" class="polar polaroid-5" alt="Textorial Park II">
                    </a>
                    <a href="https://textorialpark.com/img/polaroid-6b.jpg" class="swipebox" rel="gal-1">
                        <img src="https://textorialpark.com/img/polaroid-6.png" class="polar polaroid-6" alt="Textorial Park II">
                    </a>
                    <a href="https://textorialpark.com/img/polaroid-7b.jpg" class="swipebox" rel="gal-1">
                        <img src="https://textorialpark.com/img/polaroid-7.png" class="polar polaroid-7" alt="Textorial Park II">
                    </a>
                    <a href="https://textorialpark.com/img/polaroid-8b.jpg" class="swipebox" rel="gal-1">
                        <img src="https://textorialpark.com/img/polaroid-8.png" class="polar polaroid-8" alt="Textorial Park II">
                    </a>
                    <a href="https://textorialpark.com/img/polaroid-9b.jpg" class="swipebox" rel="gal-1">
                        <img src="https://textorialpark.com/img/polaroid-9.png" class="polar polaroid-9" alt="Textorial Park II">
                    </a>
                </div>
            </div>
        </div>
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