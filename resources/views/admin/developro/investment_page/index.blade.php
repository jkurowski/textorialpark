@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="card-head container-fluid">
            <div class="row">
                <div class="col-12 pl-0">
                    <h4 class="page-title"><i class="fe-home"></i><a href="{{route('admin.developro.investment.index')}}">Inwestycje</a><span class="d-inline-flex me-2 ms-2">/</span>{{$investment->name}}<span class="d-inline-flex me-2 ms-2">-</span>Strony tekstowe</h4>
                </div>
            </div>
        </div>
        @include('admin.developro.investment_shared.menu')
        <div class="card mt-3">
            <div class="card-body card-body-rem p-0">
                <div class="table-overflow">
                    <table id="sortable" class="table data-table mb-0 w-100">
                        <thead class="thead-default">
                        <tr>
                            <th>Tytuł</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Data utworzenia</th>
                            <th class="text-center">Data edycji</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="content">
                        @foreach ($list as $item)
                            <tr id="recordsArray_{{ $item->id }}">
                                <td>{{ $item->title }}</td>
                                <td class="text-center">{!! status($item->active) !!}</td>
                                <td class="text-center">{{ $item->created_at }}</td>
                                <td class="text-center">{{ $item->updated_at }}</td>
                                <td class="option-120">
                                    <div class="btn-group">
                                        <span class="btn action-button move-button me-1"><i class="fe-move"></i></span>
                                        <a href="{{route('admin.developro.investment.page.edit', [$investment, $item->id])}}" class="btn action-button me-1" data-bs-toggle="tooltip" data-placement="top" data-bs-title="Edytuj wpis"><i class="fe-edit"></i></a>
                                        <form method="POST" action="{{route('admin.developro.investment.page.destroy', [$investment, $item->id])}}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn action-button confirm" data-bs-toggle="tooltip" data-placement="top" data-bs-title="Usuń wpis" data-id="{{ $item->id }}"><i class="fe-trash-2"></i></button>
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
                    <a href="{{route('admin.developro.investment.page.create', $investment)}}" class="btn btn-primary">Dodaj stronę</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function(){
            $("#sortable tbody.content").sortuj('{{route('admin.investment_page.sort')}}');
        });
        //]]>
    </script>
@endpush

