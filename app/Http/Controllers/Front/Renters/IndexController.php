<?php

namespace App\Http\Controllers\Front\Renters;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Rentier;

class IndexController extends Controller
{
    public function index()
    {
        $page = Page::find(10);
        $renters = Rentier::all();

        return view("front.renters.index")->with([
            'page' => $page,
            'renters' => $renters
        ]);
    }
}
