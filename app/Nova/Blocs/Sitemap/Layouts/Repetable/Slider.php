<?php

namespace App\Nova\Blocs\Sitemap\Layouts\Repetable;

use App\Nova\Blocs\Components\ImageField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use App\Nova\Blocs\Components\TitleDescriptionField;
use OptimistDigital\MediaField\MediaField;

class Slider extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'slider_repeater';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Slider';

    /**
     * Get the fields displayed by the layout.
     *  
     * @return array
     */
    public function fields()
    {       
        return array_merge(
            TitleDescriptionField::make(),
            ImageField::make()
        );
    }

    public function title()
    {
        return __('Slider');
    }
}
