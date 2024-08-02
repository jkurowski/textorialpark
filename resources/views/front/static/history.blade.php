@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => 'historia-bg.jpg'])
@stop

@section('content')
    <section id="content" class="container container-dashed">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-12 position-relative">
                        @if($current_locale == 'pl')
                        <div class="text-line bg-gray text-center">PAMIĘTAMY O <font class="f400">HISTORII</font></div>
                        <img src="https://textorialpark.com/img/historia1x.jpg" class="img-fluid" alt="Pamiętamy o historii">
                        <div class="text-box bg-gray">
                            <p>Księży Młyn – łódzkie imperium <a href="https://pl.wikipedia.org/wiki/Karol_Scheibler" target="_blank" style="color:inherit;text-decoration:underline;text-decoration-style: dashed;">Karola Scheiblera</a>, „króla bawełny” – to jeden z&nbsp;najciekawszych zabytków przemysłowych na świecie.</p>
                            <p>&nbsp;</p>
                            <p>Wokół zabudowań fabryki włókienniczej powstało samowystarczalne osiedle dla robotników z własnymi sklepem, szkołą, szpitalem, strażą pożarną i&nbsp;parkiem.</p>
                            <p>&nbsp;</p>
                            <p>To przykład doskonale zaplanowanego „miasta w&nbsp;mieście”.</p>
                        </div>
                        @else
                            <div class="text-line bg-gray text-center">WITH HISTORY <font class="f400">IN MIND</font></div>
                            <img src="https://textorialpark.com/img/historia1x.jpg" class="img-fluid" alt="Pamiętamy o historii">
                            <div class="text-box bg-gray">
                                <p>Księży Młyn, <a href="https://pl.wikipedia.org/wiki/Karol_Scheibler" target="_blank" style="color:inherit;text-decoration:underline;text-decoration-style: dashed;">Karol Scheibler’s</a> original empire, is one of the most interesting industrial monuments in the world.</p>
                                <p>&nbsp;</p>
                                <p>The city’s cotton king, as he was referred to, turned Łódź into a leading textile-industry destination in europe. To provide living quarters for his employees, Scheibler would build self-sustainable housing estates.</p>
                                <p>&nbsp;</p>
                                <p>In effect, they were cities within cities.</p>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="row mt-5 pt-5">
                    <div class="col-12 position-relative">
                        @if($current_locale == 'pl')
                        <div class="text-line bg-orange text-center"><font class="f400">PAMIĘĆ</font> ZAKLĘTA W MURACH</div>
                        <img src="https://textorialpark.com/img/historia-n1.jpg" class="img-fluid" alt="Pamięć zaklęta w murach">
                        <div class="text-box bg-orange">
                            <p>Ze współczesnej wersji tej idei czerpie Textorial Park, który w 2008 roku obudził do życia dawną fabrykę Scheiblera na Księżym Młynie. Odrestaurowane i zmodernizowane pozostałości przemysłowych zabudowań, ocalałych po dawnych magazynach bawełny (zlokalizowanych między ul. Fabryczną a Magazynową na Księżym Młynie), dały nowe miejsce pracy dla kilku tysięcy pracowników sektora nowych technologii.</p>
                        </div>
                        @else
                        <div class="text-line bg-orange text-center"><font class="f400">MEMORY</font> ENCHANTED IN THE WALLS</div>
                        <img src="https://textorialpark.com/img/historia-n1.jpg" class="img-fluid" alt="Pamięć zaklęta w murach">
                        <div class="text-box bg-orange">
                            <p>Textorial Park, which in 2008 revived the former Scheibler factory in Księży Młyn, draws on the modern version of this idea. The restored and modernized remains of industrial buildings, left after the old cotton warehouses (located between Fabryczna and Magazynowa Streets in Księży Młyn) have created new jobs for several thousand employees of the new technologies sector.</p>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="row mt-5 pt-5">
                    @if($current_locale == 'pl')
                    <div class="col-8 text-container work-sec-lead d-flex align-items-center">
                        <p>Pozostałości ceglanych murów magazynu pieczołowicie odrestaurowano, uzupełniając ubytki, symbolicznie zaznaczając także bieg bocznicy kolejowej, który do dziś pozostaje czytelny.</p>
                    </div>
                    @else
                    <div class="col-8 text-container work-sec-lead d-flex align-items-center">
                        <p>THE REMAINS OF THE BRICK WALLS OF THE WAREHOUSE WERE RESTORED SOLICITOUSLY, FILLING DAMAGES, SYMBOLICALLY MARKING THE RUNWAY OF THE RAILWAY SIDING, WHICH REMAINS LEGIBLE UP UNTIL TODAY.</p>
                    </div>
                    @endif
                    <div class="col-4 d-flex align-items-center justify-content-end">
                        <img src="{{ asset('images/historia-n2.jpg') }}" class="w-100" alt="Ceglane mury">
                    </div>
                </div>

                <div class="row mt-5 pt-5">
                    <div class="col-12 position-relative">
                        <img src="https://textorialpark.com/img/historia-n3.jpg" class="w-100" alt="Styl">
                        <div class="text-box box-r-b bg-orange">
                            @if($current_locale == 'pl')
                            <p>Detale oryginalnych, żeliwnych płyt wyeksponowano w strefach wejścia do budynku magazynowego. Otwory okienne i wejściowe zyskały stalowe okiennice, a rampa metalowe balustrady utrzymane w postindustrialnej stylistyce.</p>
                            @else
                            <p>Details of the original cast iron plates are displayed in the entrance zones to the warehouse building. The window and door openings have steel shutters, and the ramp has metal railings in a post-industrial style.</p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row mt-5 pt-5">
                    <div class="col-12 position-relative">
                        <img src="https://textorialpark.com/img/historia-n4.jpg" class="w-100" alt="historyczny budynek z cegły">
                        <div class="text-box bg-orange">
                            @if($current_locale == 'pl')
                            <p>Historyczny budynek z cegły zyskał również współczesną erratę. Nowy obiekt z parkingiem podziemnym wzniesiono ze współczesnych materiałów, w pełni jednak nawiązując do charakteru i klimatu poprzemysłowej zabudowy miejsca. Ceglane wątki dawnego magazynu przetworzono jako odcisk w betonowych panelach elewacyjnych o szarej barwie. Dzięki temu wyraźna pozostała proweniencja stylistyczna nowego budynku, przy zachowaniu czytelnych różnic wynikających z okresu w jakim powstawały oba obiekty.</p>
                            @else
                            <p>The historic brick building has also gained a modern errata. The new facility with an underground car park was built of modern materials, fully reflecting the character and atmosphere of the post-industrial structures of the place. The brick threads of the former warehouse were processed as an imprint in the grey concrete facade panels. As a result, the stylistic provenance of the new building remains clear, while maintaining clear differences resulting from the period in which both facilities were created.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-10 slick-carousel mt-5">
                <div class="row">
                    <div class="col-3">
                        <a href="https://textorialpark.com/img/tex1.jpg" class="swipebox">
                            <img src="https://textorialpark.com/img/tex1.jpg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://textorialpark.com/img/tex2.jpg" class="swipebox">
                            <img src="https://textorialpark.com/img/tex2.jpg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://textorialpark.com/img/tex3.jpg" class="swipebox">
                            <img src="https://textorialpark.com/img/tex3.jpg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://textorialpark.com/img/tex4.jpg" class="swipebox">
                            <img src="https://textorialpark.com/img/tex4.jpg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://textorialpark.com/img/tex5.jpg" class="swipebox">
                            <img src="https://textorialpark.com/img/tex5.jpg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://textorialpark.com/img/tex6.jpg" class="swipebox">
                            <img src="https://textorialpark.com/img/tex6.jpg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://textorialpark.com/img/tex7.jpg" class="swipebox">
                            <img src="https://textorialpark.com/img/tex7.jpg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://textorialpark.com/img/tex8.jpg" class="swipebox">
                            <img src="https://textorialpark.com/img/tex8.jpg" alt="Image" style="max-width:100%;">
                        </a>
                    </div>
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