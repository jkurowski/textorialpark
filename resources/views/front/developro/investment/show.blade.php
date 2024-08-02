@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $building->name, 'header_file' => 'istniejacybg.jpg'])
@stop

@section('content')
    <section class="container container-dashed pt-5 pb-5" id="content">
        <div class="row">
            @if($investment->type == 1)
                <div class="row">
                    <div class="col-12">
                        <ul class="building-list mb-0 list-unstyled d-flex justify-content-center plan-control">
                            <li>
                                <a href="{{ route('investment')}}">WRÓĆ DO PLANU</a>
                            </li>
                            @foreach($investment->buildingFloors as $floor)
                                <li><a href="{{ route('investment.building.floor', [Str::lower($building->number), $floor->number]) }}" data-building="{{$floor->id}}">{{$floor->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-12">
                        @if($building->file)
                            <div id="plan">
                                <div id="plan-holder"><img src="{{ asset('/investment/building/'.$building->file) }}" alt="{{$building->name}}" id="invesmentplan" usemap="#invesmentplan"></div>
                                <map name="invesmentplan">
                                    <map name="invesmentplan">
                                        @foreach($investment->buildingFloors as $floor)
                                            @if($floor->html)
                                                <area shape="poly" href="{{ route('investment.building.floor', [Str::lower($building->number), $floor->number]) }}" data-item="{{$floor->id}}" title="{{$floor->name}}" alt="building-{{$floor->id}}" data-floornumber="{{$floor->id}}" data-floortype="{{$floor->type}}" coords="{{cords($floor->html)}}">
                                            @endif
                                        @endforeach
                                    </map>
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
