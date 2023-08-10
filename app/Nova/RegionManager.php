<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Outl1ne\PageManager\Nova\Resources\Region;

class RegionManager extends Region
{
    public static function uriKey()
    {
        return "region-managers";
    }
}
