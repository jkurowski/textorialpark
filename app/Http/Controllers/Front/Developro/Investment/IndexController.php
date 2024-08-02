<?php

namespace App\Http\Controllers\Front\Developro\Investment;

use App\Http\Controllers\Controller;

// CMS
use App\Models\Building;
use App\Models\Floor;
use App\Models\Investment;
use App\Models\Page;

class IndexController extends Controller
{
    public function index()
    {
        $investment = Investment::find(1);

        $page = Page::find(15);

        return view('front.developro.investment.index', compact('page', 'investment'));
    }

    public function show($language, $b)
    {
        $investment = Investment::find(1);
        $building = Building::where('number', $b)->first();
        $page = Page::find(15);

        return view('front.developro.investment.show', compact('page', 'investment', 'building'));
    }

    public function floor($language, $b, $f)
    {
        $investment = Investment::find(1);
        $building = Building::where('number', $b)->first();
        $floor = Floor::where('building_id', $building->id)->where('number', $f)->with('variants')->first();
        $page = Page::find(15);

        return view('front.developro.investment.floor', compact('page', 'investment', 'building', 'floor'));
    }
}
