@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => 'hpbg2.jpg'])
@stop

@section('content')
    <section id="content" class="container container-dashed">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    @if($current_locale == 'pl')
                    <div class="col-5 text-container text-justify d-flex align-items-center">
                        <div>
                            <p>Rozwój nowoczesnych usług biznesowych: BPO, SSC, ITO, R&amp;D i&nbsp;towarzyszące mu zapotrzebowanie na wysokiej jakości powierzchnie biurowe sprawia, że&nbsp;Łódź przeżywa obecnie swoją drugą młodość. Nie bez znaczenia jest funkcjonująca już od lat Łódzka Specjalna Strefa Ekonomiczna, która przyciąga nowych inwestorów. To napędza miasto.</p>
                            <p>&nbsp;</p>
                            <p>W ostatnich latach w&nbsp;Łodzi znacząco wzrosła liczba osób zatrudnionych w&nbsp;sektorze kreatywnym i&nbsp;naukowym z&nbsp;7&nbsp;tys. do 11&nbsp;tys. pracowników. Ta&nbsp;liczba stale rośnie, co sprawia, że obecnie Łódź jest jednym z&nbsp;najszybciej rozwijających się rynków pracy w&nbsp;Polsce.</p>
                        </div>
                    </div>
                    <div class="col-7 ps-5">
                        <div class="position-relative">
                            <div class="text-line text-line-right bg-red text-center">KAPITAŁ <font class="f400">MŁODOŚCI</font></div>
                            <img src="https://textorialpark.com/img/work1.jpg" class="img-fluid" alt="Kapitał młodości">
                        </div>
                    </div>
                    @else
                    <div class="col-5 text-container text-justify d-flex align-items-center">
                        <div>
                            <p>Łódź is currently experiencing its back-in-vogue period. The city’s growing demand for high-quality office spaces is very much in line with the developments across modern-services sectors (BPO, SSc, ItO, R&D), i.e. The driving forces of the city’s success.</p>
                            <p>&nbsp;</p>
                            <p>Over the past few years, the number of people employed in the creative and science sectors has gone up from 7,000 to 11,000 employees. The number keeps growing, which makes today’s Łódź one of the fastest growing job markets in Poland.</p>
                        </div>
                    </div>
                    <div class="col-7 ps-5">
                        <div class="position-relative">
                            <div class="text-line text-line-right bg-red text-center">THE YOUTH <font class="f400">CAPITAL</font></div>
                            <img src="https://textorialpark.com/img/work1.jpg" class="img-fluid" alt="The youth capital">
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <img src="https://textorialpark.com/img/work2.jpg" class="w-100" alt="Work">

    <section class="container container-dashed">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-10 text-container text-justify">
                        @if($current_locale == 'pl')
                        <p>Koniunktura Łodzi bazuje na dobrej współpracy z&nbsp;ośrodkami akademickimi, które co roku dostarczają miastu kilku tysięcy dobrze wykształconych pracowników. Miasto korzysta z&nbsp;tego kapitału. Znakomitym przykładem udanej współpracy biznesu z&nbsp;edukacją jest Centrum Transferu Technologii – działająca przy uczelni pierwsza w&nbsp;kraju spółka celowa, której zadaniem jest komercjalizacja technologii stworzonych w murach Politechniki Łódzkiej. <b>To&nbsp;buduje relacje</b>.</p>
                        @else
                        <p>The good market situation in Łódź is based on cooperation with academic centres, which are the source of additional positive energy: the availability of several thousand well-educated employees. The city takes advantage of this human capital. An excellent example of effective cooperation between business and education is the city’s Technology Transfer Centre, the first special purpose vehicle (SPV), operating within the university framework, whose job is to commercialise technologies developed by the Łódź University of Technology. <b>This is how relations are built</b>.</p>
                        @endif
                    </div>
                </div>

                <div class="row mt-5 pt-5">
                    @if($current_locale == 'pl')
                    <div class="col-12 position-relative">
                        <div class="text-line bg-orange text-center">CZERPIEMY Z <font class="f400">TRADYCJI MIEJSCA</font></div>
                        <img src="https://textorialpark.com/img/work3.jpg" class="img-fluid" alt="Czerpiemy z tradycji miejsca">
                        <div class="lines-box-left text-left">
                            <span class="line-box line-box-left bg-orange">3 budynki biurowe klasy A</span><br class="moff">
                            <span class="line-box line-box-left bg-orange">161 miejsc postojowych w garażu podziemnym</span><br class="moff">
                            <span class="line-box line-box-left bg-orange">79 miejsc postojowych na terenie zewnętrznym</span><br class="moff">
                            <span class="line-box line-box-left bg-orange">amfiteatr i zielone patio</span><br class="moff">
                            <span class="line-box line-box-left bg-orange">kantyna i restauracja w budynku A</span><br class="moff">
                            <span class="line-box line-box-left bg-orange">przystosowany dla osób niepełnosprawnych</span><br class="moff">
                            <span class="line-box line-box-left bg-orange">paczkomat, poczta w sąsiedztwie</span><br class="moff">
                            <span class="line-box line-box-left bg-orange">przystanki komunikacji miejskiej w pobliżu</span><br class="moff">
                        </div>
                    </div>
                    @else
                    <div class="col-12 position-relative">
                        <div class="text-line bg-orange text-center">DRAWING FROM THE <font class="f400">TRADITIONS OF THE LOCATION</font></div>
                        <img src="https://textorialpark.com/img/work3.jpg" class="img-fluid" alt="Czerpiemy z tradycji miejsca">
                        <div class="lines-box-left text-left">
                            <span class="line-box line-box-left bg-orange">3 class A office buildings</span><br class="moff">
                            <span class="line-box line-box-left bg-orange">161 parking spaces in the underground garage</span><br class="moff">
                            <span class="line-box line-box-left bg-orange">79 parking spaces outside</span><br class="moff">
                            <span class="line-box line-box-left bg-orange">Amphitheatre and green patio</span><br class="moff">
                            <span class="line-box line-box-left bg-orange">canteen and restaurant in building A</span><br class="moff">
                            <span class="line-box line-box-left bg-orange">adapted for disabled people</span><br class="moff">
                            <span class="line-box line-box-left bg-orange">parcel locker, post office in the neighbourhood</span><br class="moff">
                            <span class="line-box line-box-left bg-orange">public transport stops in the immediate vicinity</span><br class="moff">
                        </div>
                    </div>
                    @endif
                </div>

                <div class="row mt-5 pt-5">
                    <div class="col-2"></div>
                    @if($current_locale == 'pl')
                    <div class="col-8 work-sec-lead text-center">
                        Textorial Park jest&nbsp;jedną z&nbsp;inwestycji przywracających Księży Młyn łodzianom.
                    </div>
                    @else
                    <div class="col-8 work-sec-lead text-center">
                        Textorial Park is one of the investments restoring Księży Młyn to the inhabitants of Łódź.
                    </div>
                    @endif
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
    </section>
@endsection