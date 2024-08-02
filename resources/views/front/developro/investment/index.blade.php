@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => 'istniejacybg.jpg'])
@stop

@section('content')
    <section class="container container-dashed pt-5 pb-5" id="content">
        <div class="row">
            @if($investment->type == 1)
                <div class="row">
                    <div class="col-12">
                        <ul class="building-list mb-0 list-unstyled d-flex justify-content-center plan-control">
                            @foreach($investment->buildings as $building)
                                <li><a href="{{ route('investment.building', Str::lower($building->number))}}" data-building="{{$building->id}}">{{$building->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-12">
                        @if($investment->plan)
                            <div id="plan">
                                <div id="plan-holder"><img src="{{ asset('/investment/plan/'.$investment->plan->file.'') }}" alt="{{$investment->name}}" id="invesmentplan" usemap="#invesmentplan"></div>
                                <map name="invesmentplan">
                                    @if($investment->buildings)
                                        @foreach($investment->buildings as $building)
                                            <area
                                                    shape="poly"
                                                    href="{{ route('investment.building', Str::lower($building->number))}}"
                                                    alt="building-{{$building->id}}"
                                                    data-item="{{$building->id}}" title="{{$building->name}}"
                                                    data-roomnumber="{{$building->number}}"
                                                    data-roomtype="{{$building->typ}}"
                                                    data-roomstatus="{{$building->status}}"
                                                    coords="@if($building->html) {{cords($building->html)}} @endif">
                                        @endforeach
                                    @endif
                                </map>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/plan.js') }}" charset="utf-8"></script>
@endpush
