@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => 'istniejacybg.jpg'])
@stop

@section('content')
    <section class="container container-dashed" id="content">
        <div class="row">
            @if($current_locale == 'pl')
            <div class="col-12 text-center d-flex justify-content-center">
                <img src="{{ asset('images/plan/1-budynek-b.png') }}" alt="">
                <img src="{{ asset('images/plan/1-budynek-c.png') }}" alt="">
            </div>
            <div class="col-12 text-center d-flex justify-content-center">
                <img src="{{ asset('images/plan/budyneka12.jpg') }}" alt="">
            </div>
            @else
                <div class="col-12 text-center d-flex justify-content-center">
                    <img src="{{ asset('images/plan/bub.jpg') }}" alt="">
                    <img src="{{ asset('images/plan/buc.jpg') }}" alt="">
                </div>
                <div class="col-12 text-center d-flex justify-content-center">
                    <img src="{{ asset('images/plan/buildinga12.jpg') }}" alt="">
                </div>
            @endif
        </div>

        <div class="row mt-5">
            <div class="col-md-12 text-center">
                @if($current_locale == 'pl')
                <div class="text-line bg-gray text-center f300" style="position:initial;display:inline-block">ZOBACZ <strong>PLANY</strong></div>
                @else
                    <div class="text-line bg-gray text-center f300" style="position:initial;display:inline-block">SEE <strong>FLOOR PLANS</strong></div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 text-center mt-5">
                <div style="font-size:40px;font-weight:700;color:#f7b791;margin-bottom:15px">A</div>
                <img src="{{ asset('images/plan/1-c-1.jpg') }}" class="img-fluid m-auto mb-4" alt="">

                <img src="{{ asset('images/ar.png') }}" class="m-auto mb-4 mt-4" alt="">

                <a href="{{ asset('images/plan/TPI_A0.pdf') }}" style="font-size:30px;font-weight:bold;color:#e84e0f;border-bottom:1px dotted" download="">@if($current_locale == 'pl') PARTER @else GROUND FLOOR @endif</a>

                <img src="{{ asset('images/ar.png') }}" class="m-auto mb-4 mt-4" alt="">

                <a href="{{ asset('images/plan/TPI_A1.pdf') }}" style="font-size:30px;font-weight:bold;color:#99bc3c;border-bottom:1px dotted" download="">@if($current_locale == 'pl') I PIĘTRO @else 1ST FLOOR @endif</a>

                <img src="{{ asset('images/ar.png') }}" class="m-auto mb-4 mt-4" alt="">

                <a href="{{ asset('images/plan/TPI_A2.pdf') }}" style="font-size:30px;font-weight:bold;color:#85212e;border-bottom:1px dotted" download="">@if($current_locale == 'pl') II PIĘTRO @else 2ND FLOOR @endif</a>
            </div>

            <div class="col-lg-4 text-center mt-5">
                <div style="font-size:40px;font-weight:700;color:#cf7079;margin-bottom:15px">B</div>
                <img src="{{ asset('images/plan/1-c-2.jpg') }}" class="img-fluid m-auto mb-4" alt="">

                <img src="{{ asset('images/ar.png') }}" class="m-auto mb-4 mt-4" alt="">

                <a href="{{ asset('images/plan/TPI_B0.pdf') }}" style="font-size:30px;font-weight:bold;color:#e84e0f;border-bottom:1px dotted" download="">@if($current_locale == 'pl') PARTER @else GROUND FLOOR @endif</a>

                <img src="{{ asset('images/ar.png') }}" class="m-auto mb-4 mt-4" alt="">

                <a href="{{ asset('images/plan/TPI_B1.pdf') }}" style="font-size:30px;font-weight:bold;color:#99bc3c;border-bottom:1px dotted" download="">@if($current_locale == 'pl') I PIĘTRO @else 1ST FLOOR @endif</a>

                <img src="{{ asset('images/ar.png') }}" class="m-auto mb-4 mt-4" alt="">

                <a href="{{ asset('images/plan/TPI_B2.pdf') }}" style="font-size:30px;font-weight:bold;color:#85212e;border-bottom:1px dotted" download="">@if($current_locale == 'pl') II PIĘTRO @else 2ND FLOOR @endif</a>
            </div>

            <div class="col-lg-4 text-center mt-5">
                <div style="font-size:40px;font-weight:700;color:#eacbc4;margin-bottom:15px">C</div>
                <img src="{{ asset('images/plan/1-c-3.jpg') }}" class="img-fluid m-auto mb-4" alt="">

                <img src="{{ asset('images/ar.png') }}" class="m-auto mb-4 mt-4" alt="">

                <a href="{{ asset('images/plan/TPI_C0.pdf') }}" style="font-size:30px;font-weight:bold;color:#e84e0f;border-bottom:1px dotted" download="">@if($current_locale == 'pl') PARTER @else GROUND FLOOR @endif</a>

                <img src="{{ asset('images/ar.png') }}" class="m-auto mb-4 mt-4" alt="">

                <a href="{{ asset('images/plan/TPI_C1.pdf') }}" style="font-size:30px;font-weight:bold;color:#99bc3c;border-bottom:1px dotted" download="">@if($current_locale == 'pl') I PIĘTRO @else 1ST FLOOR @endif</a>

                <img src="{{ asset('images/ar.png') }}" class="m-auto mb-4 mt-4" alt="">

                <a href="{{ asset('images/plan/TPI_C2.pdf') }}" style="font-size:30px;font-weight:bold;color:#85212e;border-bottom:1px dotted" download="">@if($current_locale == 'pl') II PIĘTRO @else 2ND FLOOR @endif</a>
            </div>
        </div>
    </section>
@endsection
@push('scripts')

@endpush