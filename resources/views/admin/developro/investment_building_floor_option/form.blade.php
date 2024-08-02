@extends('admin.layout')
@section('content')
@if(Route::is('admin.developro.investment.building.floor.options.edit'))
    <form method="POST" action="{{route('admin.developro.investment.building.floor.options.update', [$investment, $building, $floor, $entry])}}" enctype="multipart/form-data" class="mappa">
        {{method_field('PUT')}}
@else
    <form method="POST" action="{{route('admin.developro.investment.building.floor.options.store', [$investment, $building, $floor])}}" enctype="multipart/form-data" class="mappa">
        @endif
        @csrf
        <div class="container">
            <div class="card">
                <div class="card-head container">
                    <div class="row">
                        <div class="col-12 pl-0">
                            <h4 class="page-title"><i class="fe-home"></i><a href="{{route('admin.developro.investment.index')}}">Inwestycje</a><span class="d-inline-flex me-2 ms-2">/</span><a href="{{route('admin.developro.investment.buildings.index', $investment)}}">{{$investment->name}}</a><span class="d-inline-flex me-2 ms-2">/</span><a href="{{route('admin.developro.investment.building.floors.index', [$investment, $building])}}">{{ $building->name }}</a><span class="d-inline-flex me-2 ms-2">/</span>{{ $cardTitle }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                @include('form-elements.back-route-button')
                <div class="card-body">
                    <div class="row">
                        @include('form-elements.errors')
                        <div class="col-12">
                            @include('form-elements.html-select', [
                                'label' => 'Typ piętra',
                                'name' => 'type',
                                'selected' => $entry->type,
                                'select' => [
                                    '2' => 'Piętro usługowe'
                            ]])
                            @include('form-elements.input-text', ['label' => 'Nazwa wariantu', 'name' => 'name', 'value' => $entry->name, 'required' => 1])
                            @include('form-elements.input-text', ['label' => 'Numer piętra', 'name' => 'number', 'value' => $entry->number, 'required' => 1])
                            @include('form-elements.html-input-file', ['label' => 'Plan piętra', 'sublabel' => '(wymiary: '.config('images.floor.width').'px / '.config('images.floor.height').'px)', 'name' => 'file'])
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="floor_id" value="{{ $floor->id }}">
            <input type="hidden" name="building_id" value="{{ $building->id }}">
            <input type="hidden" name="investment_id" value="{{ $investment->id }}">
            @include('form-elements.submit', ['name' => 'submit', 'value' => 'Zapisz piętro'])
        </div>
    </form>
@endsection
