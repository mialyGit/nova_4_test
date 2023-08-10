<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Outl1ne\PageManager\Nova\Resources\Page;


class PageManager extends Page
{
    public static function uriKey()
    {
        return "page-managers";
    }
}
