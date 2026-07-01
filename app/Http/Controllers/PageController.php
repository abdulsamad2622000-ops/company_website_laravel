<?php

namespace App\Http\Controllers;

use App\Support\Catalog;

class PageController extends Controller
{
    public function home()
    {
        return view('home', [
            'servicesByCategory' => Catalog::servicesByCategory(),
            'industries'         => Catalog::industries(),
        ]);
    }

    public function about()
    {
        return view('about', [
            'servicesByCategory' => Catalog::servicesByCategory(),
        ]);
    }

    public function pricing()
    {
        return view('pricing', [
            'servicesByCategory' => Catalog::servicesByCategory(),
        ]);
    }
}
