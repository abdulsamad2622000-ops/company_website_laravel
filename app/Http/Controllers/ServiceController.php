<?php

namespace App\Http\Controllers;

use App\Support\Catalog;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ServiceController extends Controller
{
    public function show(string $slug)
    {
        $service = Catalog::service($slug);

        if (! $service) {
            throw new NotFoundHttpException('Service not found.');
        }

        return view('services.show', [
            'service'            => $service,
            'servicesByCategory' => Catalog::servicesByCategory(),
        ]);
    }
}
