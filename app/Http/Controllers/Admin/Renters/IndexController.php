<?php

namespace App\Http\Controllers\Admin\Renters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// CMS
use App\Http\Requests\RentersFormRequest;
use App\Repositories\RentierRepository;
use App\Services\RentierService;
use App\Models\Rentier;

class IndexController extends Controller
{
    private RentierRepository $repository;
    private RentierService $service;

    public function __construct(RentierRepository $repository, RentierService $service)
    {
//        $this->middleware('permission:box-list|box-create|box-edit|box-delete', [
//            'only' => ['index','store']
//        ]);
//        $this->middleware('permission:box-create', [
//            'only' => ['create','store']
//        ]);
//        $this->middleware('permission:box-edit', [
//            'only' => ['edit','update']
//        ]);
//        $this->middleware('permission:box-delete', [
//            'only' => ['destroy']
//        ]);

        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {
        return view('admin.renters.index', ['list' => $this->repository->allSort('ASC')]);
    }

    public function create()
    {
        return view('admin.renters.form', [
            'cardTitle' => 'Dodaj wpis',
            'backButton' => route('admin.renters.index')
        ])->with('entry', Rentier::make());
    }

    public function store(RentersFormRequest $request)
    {
        $entry = $this->repository->create($request->validated());

        if ($request->hasFile('file')) {
            $this->service->upload($request->name, $request->file('file'), $entry);
        }

        return redirect(route('admin.renters.index'))->with('success', 'Wpis dodany');
    }

    public function edit($id)
    {
        if(request()->get('lang')) {
            app()->setLocale(request()->get('lang'));
        }

        return view('admin.renters.form', [
            'entry' => $this->repository->find($id),
            'cardTitle' => 'Edytuj wpis',
            'backButton' => route('admin.renters.index')
        ]);
    }

    public function update(RentersFormRequest $request, $id)
    {
        if(request()->get('lang')) {
            app()->setLocale(request()->get('lang'));
        }

        $box = $this->repository->find($id);
        $this->repository->update($request->validated(), $box);

        if ($request->hasFile('file')) {
            $this->service->upload($request->name, $request->file('file'), $box, 1);
        }

        return redirect(route('admin.renters.index'))->with('success', 'Wpis zaktualizowany');
    }

    public function destroy(int $id)
    {
        $this->repository->delete($id);
        return response()->json('Deleted');
    }

    public function sort(Request $request)
    {
        $this->repository->updateOrder($request->get('recordsArray'));
    }
}
