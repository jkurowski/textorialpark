<?php

namespace App\Http\Controllers\Front\Static;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function live()
    {
        $page = Page::find(9);
        return view('front.static.live', compact('page'));
    }

    public function work()
    {
        $page = Page::find(9);
        return view('front.static.work', compact('page'));
    }

    public function enjoy()
    {
        $page = Page::find(9);
        return view('front.static.enjoy', compact('page'));
    }

    public function history()
    {
        $page = Page::find(14);
        return view('front.static.history', compact('page'));
    }

    public function kampus()
    {
        $page = Page::find(14);
        return view('front.static.kampus', compact('page'));
    }
}
