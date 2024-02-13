@extends('layouts.page')

@section('meta_title', 'Kontakt')
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Live', 'header_file' => 'hpbg2.jpg'])
@stop

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">

                    <div class="text-line bg-gray text-center">PAMIĘTAMY O <font class="f400">HISTORII</font></div>
                    <img src="https://textorialpark.com/img/historia1x.jpg" class="img-fluid" alt="Pamiętamy o historii">
                    <div class="text-box bg-gray">
                        <p>Księży Młyn – łódzkie imperium <a href="https://pl.wikipedia.org/wiki/Karol_Scheibler" target="_blank" style="color:inherit;text-decoration:underline;text-decoration-style: dashed;">Karola Scheiblera</a>, „króla bawełny” – to jeden z&nbsp;najciekawszych zabytków przemysłowych na świecie.</p>
                        <p>&nbsp;</p>
                        <p>Wokół zabudowań fabryki włókienniczej powstało samowystarczalne osiedle dla robotników z własnymi sklepem, szkołą, szpitalem, strażą pożarną i&nbsp;parkiem.</p>
                        <p>&nbsp;</p>
                        <p>To przykład doskonale zaplanowanego „miasta w&nbsp;mieście”.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">

                    <div class="text-line bg-orange text-center"><font class="f400">PAMIĘĆ</font> ZAKLĘTA W MURACH</div>
                    <img src="https://textorialpark.com/img/historia-n1.jpg" class="img-fluid" alt="Pamięć zaklęta w murach">
                    <div class="text-box bg-orange">
                        <p>Ze współczesnej wersji tej idei czerpie Textorial Park, który w 2008 roku obudził do życia dawną fabrykę Scheiblera na Księżym Młynie. Odrestaurowane i zmodernizowane pozostałości przemysłowych zabudowań, ocalałych po dawnych magazynach bawełny (zlokalizowanych między ul. Fabryczną a Magazynową na Księżym Młynie), dały nowe miejsce pracy dla kilku tysięcy pracowników sektora nowych technologii.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-8 text-container work-sec-lead d-flex align-items-center">
                    <p>Pozostałości ceglanych murów magazynu pieczołowicie odrestaurowano, uzupełniając ubytki, symbolicznie zaznaczając także bieg bocznicy kolejowej, który do dziś pozostaje czytelny.</p>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-end">
                    <img src="https://textorialpark.com/img/historia-n2.jpg" class="w-100" alt="Ceglane mury">
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">
                    <img src="https://textorialpark.com/img/historia-n3.jpg" class="w-100" alt="Styl">
                    <div class="text-box box-r-b bg-orange">
                        <p>Detale oryginalnych, żeliwnych płyt wyeksponowano w strefach wejścia do budynku magazynowego. Otwory okienne i wejściowe zyskały stalowe okiennice, a rampa metalowe balustrady utrzymane w postindustrialnej stylistyce.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">
                    <img src="https://textorialpark.com/img/historia-n4.jpg" class="w-100" alt="historyczny budynek z cegły">
                    <div class="text-box bg-orange">
                        <p>Historyczny budynek z cegły zyskał również współczesną erratę. Nowy obiekt z parkingiem podziemnym wzniesiono ze współczesnych materiałów, w pełni jednak nawiązując do charakteru i klimatu poprzemysłowej zabudowy miejsca. Ceglane wątki dawnego magazynu przetworzono jako odcisk w betonowych panelach elewacyjnych o szarej barwie. Dzięki temu wyraźna pozostała proweniencja stylistyczna nowego budynku, przy zachowaniu czytelnych różnic wynikających z okresu w jakim powstawały oba obiekty.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="text-line bg-red text-center">BUDUJEMY <font class="f400">PRZYSZŁOŚĆ</font></div>
                    <img src="https://textorialpark.com/img/historia2.jpg" class="img-fluid" alt="Budujemy przyszłość">
                    <div class="text-box bg-red">
                        <p>Z tej idei czerpie Textorial Park II, wokół którego zaprojektowano ciekawą, wielofunkcyjną przestrzeń miejską z&nbsp;małą architekturą, zachęcającą zarówno pracowników biur, jak&nbsp;i&nbsp;okolicznych mieszkańców do wspólnego spędzania czasu. Klimatyczne zakątki Księżego Młyna, otoczenie ceglanych magazynów tekstylnych i&nbsp;nowych budynków, tworzą nie tylko atrakcyjne miejsce pracy, ale też relaksu w&nbsp;stylu slow.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container slick-carousel">
            <div class="row">
                <div class="col-3">
                    <a href="https://textorialpark.com/img/tex1.jpg" data-fancybox="gallery">
                        <img src="https://textorialpark.com/img/tex1.jpg" alt="Image" style="max-width:100%;">
                    </a>
                </div>
                <div class="col-3">
                    <a href="https://textorialpark.com/img/tex2.jpg" data-fancybox="gallery">
                        <img src="https://textorialpark.com/img/tex2.jpg" alt="Image" style="max-width:100%;">
                    </a>
                </div>
                <div class="col-3">
                    <a href="https://textorialpark.com/img/tex3.jpg" data-fancybox="gallery">
                        <img src="https://textorialpark.com/img/tex3.jpg" alt="Image" style="max-width:100%;">
                    </a>
                </div>
                <div class="col-3">
                    <a href="https://textorialpark.com/img/tex4.jpg" data-fancybox="gallery">
                        <img src="https://textorialpark.com/img/tex4.jpg" alt="Image" style="max-width:100%;">
                    </a>
                </div>
                <div class="col-3">
                    <a href="https://textorialpark.com/img/tex5.jpg" data-fancybox="gallery">
                        <img src="https://textorialpark.com/img/tex5.jpg" alt="Image" style="max-width:100%;">
                    </a>
                </div>
                <div class="col-3">
                    <a href="https://textorialpark.com/img/tex6.jpg" data-fancybox="gallery">
                        <img src="https://textorialpark.com/img/tex6.jpg" alt="Image" style="max-width:100%;">
                    </a>
                </div>
                <div class="col-3">
                    <a href="https://textorialpark.com/img/tex7.jpg" data-fancybox="gallery">
                        <img src="https://textorialpark.com/img/tex7.jpg" alt="Image" style="max-width:100%;">
                    </a>
                </div>
                <div class="col-3">
                    <a href="https://textorialpark.com/img/tex8.jpg" data-fancybox="gallery">
                        <img src="https://textorialpark.com/img/tex8.jpg" alt="Image" style="max-width:100%;">
                    </a>
                </div>
            </div>
        </div>
    </section>
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