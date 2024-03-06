@extends('layouts.page')

@section('meta_title', 'Kampus')
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Kampus', 'header_file' => 'istniejacybg.jpg'])
@stop

@section('content')
    <section class="container container-dashed" id="wideo">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-lg-6 text-container text-justify">
                        <b>Textorial Park to nowoczesny park biurowy w Łodzi, zlokalizowany nieopodal centrum miasta, składający się z 3 budynków biurowych klasy A.</b> Kompleks jest położony na obszarze Księżego Młyna, stanowiącego bardzo ważną dla Łodzi część historyczną i graniczy z zabytkowym Parkiem Źródliska. Bliskość centrum Łodzi, a jednocześnie sąsiedztwo terenów zielonych sprawia, że nieopodal pojawiają się modne lofty oraz restauracje. Kompleks biurowy jest obiektem otwartym, funkcjonującym 24/7.
                        <br><br>
                        W okolicy istnieje duża liczba linii autobusowych i tramwajowych, które mogą być wykorzystane, aby dostać się do kompleksu Textorial Park. Budynki znajdują się w odległości 10 minut pieszo do głównej trady komunikacyjnej łączące Łódź Wschód Zachód.
                        <br><br>
                        Dostęp do pomieszczeń budynków mają osoby pracujące na terenie Textorial Park, firmy serwisowe oraz goście za pomocą kart kontroli dostępu. W budynku A znajduje się domofon, natomiast w budynkach B i C są stanowiska recepcji udzielające informacji oraz odpowiedzialne za kierowanie gości do odpowiednich najemców.
                        <br><br>

                        Na terenie obiektu znajduje się 161 miejsc postojowych w garażu podziemnym oraz 79 miejsc na terenie zewnętrznym. Parking rowerowy jest przewidziany dla 193 użytkowników.
                        <br><br>
                        Na terenie kompleksu znajdują się przestrzenie rekreacyjne: Amfiteatr (służący, między innymi, do organizacji koncertów) oraz zielone  patio, które wraz ze stolikami i ławami daje możliwość najemcom odpoczynku, spożycia lunchu oraz rekreacji.
                        <br><br>
                        W budynku A znajdują się kantyna oraz restauracja.
                        <br><br>
                        Textorial Park przystosowany jest do swobodnego poruszania się osób niepełnosprawnych.
                        <br><br>
                    </div>
                    <div class="col-lg-6 planowany-fotki">
                        <img src="{{ asset('images/ik1.jpg') }}" class="w-100 mb-4" alt="">
                        <img src="{{ asset('images/ik2.jpg') }}" class="w-100" alt="">
                    </div>
                </div>

                <div class="row position-relative mt-4">
                    <div class="text-line text-line-right bg-blue text-center najemcy-pasek metryka-pasek">METRYKA <font class="f400">TEXTORIAL PARK I</font></div>
                    <div class="col-lg-4 metryka-left">
                        <div class="o-nas-page bg-blue text-left f300 o-nas-page-metryka">
                            <b>Inwestor: </b> <br>Fabryczna 17 SPP Spółka z ograniczoną odpowiedzialnością S.K.A
                            <br><br>
                            <b>Adres:</b> Łódź, ul. Fabryczna 17
                            <br><br>
                            <b>Zarządca:</b> St. Paul’s Developments Polska
                            <br><br>
                            <b>Parking:</b> 161 miejsc podziemnych i 79 miejsc na terenie zewnętrznym
                            <br><br>
                            <b>Liczba budynków:</b> 3
                            <br><br>
                            <b>Budynek A: </b><br>
                            parter: 2040m<sup>2</sup><br>
                            pierwsze piętro: 2081m<sup>2</sup><br>
                            poziom penthouse: 574m<sup>2</sup><br>
                            restauracja/catering: 300m<sup>2</sup>
                            <br><br>
                            <b>Budynek B: </b><br>
                            parter: 1500m<sup>2</sup><br>
                            pierwsze piętro: 1517m<sup>2</sup><br>
                            poziom penthouse: 989m<sup>2</sup>
                            <br><br>
                            <b>Budynek C:</b><br>
                            parter: 1719m<sup>2</sup><br>
                            pierwsze piętro: 1912m<sup>2</sup><br>
                            poziom penthouse: 1458m<sup>2</sup>
                        </div>
                    </div>

                    <div class="col-lg-8 p-0">
                        <img src="{{ asset('images/metryka-1.jpg') }}" alt="Textorial Park" class="w-100 h-100 object-fit-cover">
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

        });
    </script>
@endpush