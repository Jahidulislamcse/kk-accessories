<?php

namespace App\Services;

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

        return compact('settings', 'sliders', 'services');
    }
}
