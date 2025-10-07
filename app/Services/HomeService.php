<?php

namespace App\Services;

use App\Models\Brand;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;

class HomeService
{

    public function getHomeData(): array
    {
        $settings = Setting::first();
        $sliders  = Slider::all();
        $services  = Service::all();
        $brands = Brand::all();

        return compact('settings', 'sliders', 'services', 'brands');
    }
}
