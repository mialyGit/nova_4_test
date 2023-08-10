<?php

namespace App\Nova\Blocs;

use App\Nova\Blocs\HomePage\Bloc;
use App\Nova\Blocs\HomePage\About;
use App\Nova\Blocs\Layouts\HeroImage;
use App\Nova\Blocs\Layouts\BannerImage;
use App\Nova\Blocs\HomePage\HeaderSlider;
use App\Nova\Blocs\Layouts\ImageFullWidth;
use Whitecube\NovaFlexibleContent\Flexible;
use App\Nova\Blocs\Layouts\TitreDescriptionDescription;

class CustomFlexibleBlocs
{
    const BLOC_HEADER_SLIDER = 'BlocHeaderSlider';
    const BLOC_CHECK_LIST = 'BlocCheckList';
    const BLOC_ABOUT = 'BlocAbout';
    const BLOC_PRICING = 'BlocPricing';

    public static function get()
    {
        return Flexible::make('Contenu', 'flexible_content')
            ->confirmRemove()
            ->button(__('Add bloc'))
            ->addLayout(__('Header Slider'), self::BLOC_HEADER_SLIDER, Bloc::headerSlider())
            ->addLayout(__('Pricing'), self::BLOC_PRICING, Bloc::pricing())
            ->addLayout(About::class);
    }
}
