<?php

namespace App\Http\Controllers;

use App\Support\Catalog;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class IndustryController extends Controller
{
    public function website(string $slug)
    {
        $industry = Catalog::industry($slug);

        if (! $industry) {
            throw new NotFoundHttpException('Industry not found.');
        }

        return view('industries.website', [
            'industry'   => $industry,
            'industries' => Catalog::industries(),
        ]);
    }

    public function erp(string $slug)
    {
        $industry = Catalog::industry($slug);

        if (! $industry) {
            throw new NotFoundHttpException('Industry not found.');
        }

        return view('industries.erp', [
            'industry'   => $industry,
            'industries' => Catalog::industries(),
        ]);
    }
}
