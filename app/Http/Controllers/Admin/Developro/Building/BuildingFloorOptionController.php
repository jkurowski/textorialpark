<?php

namespace App\Http\Controllers\Admin\Developro\Building;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuildingFloorCopyFormRequest;
use App\Models\Building;
use App\Models\Floor;
use App\Models\Investment;
use App\Repositories\BuildingFloorRepository;
use App\Services\BuildingFloorService;
use Illuminate\Http\Request;

class BuildingFloorOptionController extends Controller
{
    private $repository;
    private $service;

    public function __construct(BuildingFloorRepository $repository, BuildingFloorService $service)
    {
//        $this->middleware('permission:building-list|building-create|building-edit|building-delete', [
//            'only' => ['index','store']
//        ]);
//        $this->middleware('permission:building-create', [
//            'only' => ['create','store']
//        ]);
//        $this->middleware('permission:building-edit', [
//            'only' => ['edit','update']
//        ]);
//        $this->middleware('permission:building-delete', [
//            'only' => ['destroy']
//        ]);

        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(Investment $investment, Building $building, Floor $floor)
    {
        return view('admin.developro.investment_building_floor_option.index', [
            'investment' => $investment,
            'building' => $building,
            'list' => $building->floorsOptionsWithCount(),
            'floor' => $floor
        ]);
    }

    public function create(Investment $investment, Building $building, Floor $floor)
    {
        return view('admin.developro.investment_building_floor_option.form', [
            'cardTitle' => 'Dodaj pietro',
            'backButton' => route('admin.developro.investment.building.floor.options.index', [$investment, $building, $floor]),
            'building' => $building,
            'investment' => $investment,
            'floor' => $floor,
        ])->with('entry', Building::make());
    }

    public function store(BuildingFloorCopyFormRequest $request, Investment $investment, Building $building, Floor $floor)
    {
        $option = $this->repository->create($request->validated());

        if ($request->hasFile('file')) {
            $this->service->uploadPlan($request->name, $request->file('file'), $option);
        }

        return redirect()->route('admin.developro.investment.building.floor.options.index', [$investment, $building, $floor])->with('success', 'Nowy wariant dodany');
    }

    public function edit(Investment $investment, Building $building, Floor $floor, Floor $option)
    {
        return view('admin.developro.investment_building_floor_option.form', [
            'cardTitle' => 'Edytuj pietro',
            'backButton' => route('admin.developro.investment.building.floor.options.index', [$investment, $building, $floor]),
            'entry' => $option,
            'building' => $building,
            'investment' => $investment,
            'floor' => $floor
        ]);
    }

    public function update(BuildingFloorCopyFormRequest $request, Investment $investment, Building $building, Floor $floor, Floor $option)
    {
        $this->repository->update($request->validated(), $option);

        if ($request->hasFile('file')) {
            $this->service->uploadPlan($request->name, $request->file('file'), $option, true);
        }

        return redirect()->route('admin.developro.investment.building.floor.options.index', [$investment, $building, $floor])->with('success', 'Wariant zaktualizowane');
    }

    public function destroy(Investment $investment, Building $building, Floor $floor, Floor $option)
    {
        $this->repository->delete($option->id);
        return response()->json('Deleted');
    }
}
