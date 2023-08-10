<?php

namespace App\Nova\Blocs\Sitemap\Layouts;

use App\Nova\Blocs\Components\AnchorField;
use App\Nova\Blocs\Components\ImageField;
use OptimistDigital\MediaField\MediaField;
use App\Nova\Blocs\Sitemap\CommonFlexibleBlocs;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class ImageFullWidth extends Layout
{    
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = CommonFlexibleBlocs::BLOC_IMAGE_FULL_WIDTH;

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Image with full width';

    /**
     * Get the fields displayed by the layout.
     *  
     * @return array
     */
    public function fields()
    {
        return array_merge(
            AnchorField::make(),
            ImageField::make()
        );
    }

    public function title()
    {
        return __('Image with full width');
    }
}
