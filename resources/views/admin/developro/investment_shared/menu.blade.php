<div class="card-header card-nav">
    <nav class="nav">
        <a class="nav-link " href="{{route('admin.developro.investment.edit', $investment)}}"><span class="fe-info"></span> {{$investment->name}}</a>
        @if ($investment->type == 1)
            <a class="nav-link {{ Request::routeIs('admin.developro.investment.buildings.index') ? ' active' : '' }}" href="{{route('admin.developro.investment.buildings.index', $investment->id)}}"><span class="fe-package"></span> Lista budynków</a>
        @endif

        @if (Request::routeIs('admin.developro.investment.building.floors.index') || Request::routeIs('admin.developro.investment.building.floor.properties.index'))
            <a class="nav-link {{ Request::routeIs('admin.developro.investment.building.floors.index') ? ' active' : '' }}" href="{{route('admin.developro.investment.building.floors.index', [$investment, $building])}}"><span class="fe-layers"></span>{{$building->name}} - Lista kondygnacji</a>
        @endif

        @if (Request::routeIs('admin.developro.investment.building.floor.options.index')))
            <a class="nav-link {{ Request::routeIs('admin.developro.investment.building.floors.index') ? ' active' : '' }}" href="{{route('admin.developro.investment.building.floors.index', [$investment, $building])}}"><span class="fe-layers"></span>{{$building->name}} - Lista kondygnacji</a>
        @endif

        <a class="nav-link {{ Request::routeIs('admin.developro.investment.plan.index') ? ' active' : '' }}" href="{{route('admin.developro.investment.plan.index', $investment)}}"><span class="fe-image"></span> Plan inwestycji</a>
    </nav>
</div>
