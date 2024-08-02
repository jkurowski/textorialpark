@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="card-head container-fluid">
            <div class="row">
                <div class="col-12 pl-0">
                    <h4 class="page-title">
                        <i class="fe-home"></i>
                        <a href="{{route('admin.developro.investment.index')}}">Inwestycje</a>
                        <span class="d-inline-flex me-2 ms-2">/</span>
                        <a href="{{route('admin.developro.investment.buildings.index', $investment)}}">{{$investment->name}}</a>
                        <span class="d-inline-flex me-2 ms-2">/</span>
                        <a href="{{route('admin.developro.investment.building.floors.index', [$investment, $building])}}">{{$building->name}}</a>
                        <span class="d-inline-flex me-2 ms-2">/</span>
                        <a href="{{route('admin.developro.investment.building.floor.options.index', [$investment, $building, $parent])}}">{{$parent->name}}</a>
                        <span class="d-inline-flex me-2 ms-2">/</span> {{ $parent->name }} - {{$floor->name}}
                    </h4>
                </div>
            </div>
        </div>
        @include('admin.developro.investment_shared.menu')

        <div class="card mt-3">
            <div class="card-body card-body-rem p-0">
                <div class="table-overflow">
                    <table class="table mb-0" id="sortable">
                        <thead class="thead-default">
                        <tr>
                            <th>#</th>
                            <th>Nazwa</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Metraż</th>
                            <th>Data modyfikacji</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="content">
                        @foreach ($list as $index => $p)
                            <tr id="recordsArray_{{ $p->id }}">
                                <th class="position" scope="row">{{ $index+1 }}</th>
                                <td>{{ $p->name }}</td>
                                <td><span class="badge room-list-status-{{ $p->status }}">{{ roomStatus($p->status) }}</span></td>
                                <td class="text-center">{{ $p->area }} m<sup>2</sup></td>
                                <td>{{ $p->updated_at }}</td>
                                <td class="option-120">
                                    <div class="btn-group">
                                        <a href="{{route('admin.developro.investment.building.floor.properties.edit', [$investment, $building, $floor, $p])}}" class="btn action-button me-1" data-bs-toggle="tooltip" data-placement="top" data-bs-title="Edytuj"><i class="fe-edit"></i></a>
                                        <form method="POST" action="{{route('admin.developro.investment.building.floor.properties.destroy', [$investment, $building, $floor, $p])}}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn action-button confirm" data-bs-toggle="tooltip" data-placement="top" data-bs-title="Usuń" data-id="{{ $p->id }}"><i class="fe-trash-2"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group form-group-submit">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <a href="{{route('admin.developro.investment.building.floor.properties.create', [$investment, $building, $floor])}}" class="btn btn-primary">Dodaj</a>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });
            @if (session('success')) toastr.options={closeButton:!0,progressBar:!0,positionClass:"toast-bottom-right",timeOut:"3000"};toastr.success("{{ session('success') }}"); @endif
        </script>
    @endpush
@endsection
