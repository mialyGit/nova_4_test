<?php

namespace App\Nova\Blocs\Sitemap\Layouts;

use App\Nova\Blocs\Components\AnchorField;
use App\Nova\Blocs\Components\ButtonField;
use App\Nova\Blocs\Components\ImageField;
use App\Nova\Blocs\Sitemap\CommonFlexibleBlocs;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use App\Nova\Blocs\Components\TitleDescriptionField;
use OptimistDigital\MediaField\MediaField;

class HeroImage extends Layout
{    
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = CommonFlexibleBlocs::BLOC_HERO_IMAGE;

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Hero Image';

    /**
     * Get the fields displayed by the layout.
     *  
     * @return array
     */
    public function fields()
    {
        return array_merge(
            AnchorField::make(),
            TitleDescriptionField::make(),
            ButtonField::make(),
            ImageField::make()
        );
    }

    public function title()
    {
        return __('Hero Image');
    }
}
