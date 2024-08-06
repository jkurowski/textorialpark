@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $floor->name, 'header_file' => 'istniejacybg.jpg'])
@stop

@section('content')
    <section class="container container-dashed pt-5 pb-5" id="content">
        @if($investment->type == 1)
            <div class="row">
                @php
                    $floorVariants = $floor->variants;
                @endphp
                <div class="col-12">
                    <ul class="building-list mb-0 list-unstyled d-flex justify-content-center plan-control nav" id="myTab" role="tablist">
                        <li>
                            <a href="{{ route('investment.building', Str::lower($building->number))}}">WRÓĆ DO BUDYNKU</a>
                        </li>
                        @foreach($floorVariants as $floor)
                            <li><button class="nav-link {{ $loop->first ? 'active' : '' }}" data-floor="{{$floor->id}}" id="floor-{{$floor->id}}" data-bs-toggle="tab" data-bs-target="#floor{{$floor->id}}" role="tab" aria-controls="home" aria-selected="false">{{$floor->name}}</button></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        @foreach($floorVariants as $floor)
                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="floor{{$floor->id}}" role="tabpanel" aria-labelledby="floor-{{$floor->id}}">
                                @if($floor->file)
                                    <div class="floor-plan-holder">
                                        <img src="{{ asset('/investment/floor/webp/'.$floor->file_webp) }}" alt="{{$floor->name}}" id="invesmentplan-{{$floor->id}}" usemap="#invesmentplan-{{$floor->id}}" class="floorplan">
                                        <map name="invesmentplan-{{$floor->id}}">
                                            @if($floor->properties->count() > 0)
                                                @foreach($floor->properties as $r)
                                                    @if($r->html)
                                                        <area
                                                                shape="poly"
                                                                href="#"
                                                                data-item="{{$r->id}}"
                                                                title="{{$r->name}}<br>Powierzchnia: <b class=fr>{{$r->area}} m<sup>2</sup></b><br><b>{{ roomStatus($r->status) }}</b>"
                                                                alt="{{$r->slug}}"
                                                                data-roomnumber="{{$r->number}}"
                                                                data-roomtype="{{$r->typ}}"
                                                                data-roomstatus="{{$r->status}}"
                                                                coords="{{cords($r->html)}}"
                                                                class="inline status-{{$r->status}}"
                                                        >
                                                    @endif
                                                @endforeach
                                            @endif
                                        </map>
                                    </div>
                                @endif

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                @if($floor->properties->count() > 0)
                                                    <div class="table-responsive">
                                                        <table class="table mt-3">
                                                            <thead>
                                                            <tr>
                                                                <th>Status</th>
                                                                <th class="ps-4">Piętro</th>
                                                                <th>Nazwa</th>
                                                                <th>Powierzchnia</th>
                                                                <th></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($floor->properties as $r)
                                                                <tr>
                                                                    <td>{!! roomStatusBadge($r->status) !!}</td>
                                                                    <td class="vertical-align-middle ps-4">{{ $floor->number }}</td>
                                                                    <td class="vertical-align-middle">{{$r->name}}</td>
                                                                    <td class="vertical-align-middle">{{$r->area}} m<sup>2</sup></td>
                                                                    <td>
                                                                        <a href="">Zapytaj o lokal</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/tip.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/floor.js') }}" charset="utf-8"></script>
@endpush
