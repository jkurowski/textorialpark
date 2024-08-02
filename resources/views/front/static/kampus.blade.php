@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => 'istniejacybg.jpg'])
@stop

@section('content')
    <section class="container container-dashed" id="content">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-lg-6 text-container text-justify">
                        {!! parse_text($page->content) !!}
                    </div>
                    <div class="col-lg-6 planowany-fotki">
                        <img src="{{ asset('images/ik1.jpg') }}" class="w-100 mb-4" alt="">
                        <img src="{{ asset('images/ik2.jpg') }}" class="w-100" alt="">
                    </div>
                </div>

                <div class="row position-relative mt-4">
                    @if($current_locale == 'pl')
                    <div class="text-line text-line-right bg-blue text-center najemcy-pasek metryka-pasek">METRYKA <font class="f400">TEXTORIAL PARK</font></div>
                    @else
                    <div class="text-line text-line-right bg-blue text-center najemcy-pasek metryka-pasek">METRICS OF <font class="f400">TEXTORIAL PARK</font></div>
                    @endif
                    <div class="col-lg-4 metryka-left">
                        <div class="o-nas-page bg-blue text-left f300 o-nas-page-metryka">
                            @if($current_locale == 'pl')
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
                            @else
                            <b>Investor: </b><br>Fabryczna 17 SPP Spółka z ograniczoną odpowiedzialnością S.K.A
                            <br><br>
                            <b>Address:</b> Łódź, ul. Fabryczna 17
                            <br><br>
                            <b>Property Manager:</b> St. Paul’s Developments Polska
                            <br><br>
                            <b>Parking:</b> 161 underground spaces and 79 outdoor spaces
                            <br><br>
                            <b>Number of buildings::</b> 3
                            <br><br>
                            <b>Building A: </b><br>
                            ground floor: 2040m<sup>2</sup><br>
                            first floor: 2081m<sup>2</sup><br>
                            penthouse level: 574m<sup>2</sup><br>
                            restaurant/catering: 300m<sup>2</sup>
                            <br><br>
                            <b>Building B: </b><br>
                            ground floor: 1500m<sup>2</sup><br>
                            first floor: 1517m<sup>2</sup><br>
                            penthouse level: 989m<sup>2</sup>
                            <br><br>
                            <b>Building C:</b><br>
                            ground floor: 1719m<sup>2</sup><br>
                            first floor: 1912m<sup>2</sup><br>
                            penthouse level: 1458m<sup>2</sup>
                            @endif
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