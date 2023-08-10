<?php

namespace App\Nova\Blocs\Sitemap\Layouts\Repetable;

use App\Nova\Blocs\Components\ImageField;
use Laravel\Nova\Fields\Text;
use OptimistDigital\MediaField\MediaField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class ImageUrl extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'image_url';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Image & Url';

    /**
     * Get the fields displayed by the layout.
     *  
     * @return array
     */
    public function fields()
    {
        return ImageField::make(true);
    }
}
