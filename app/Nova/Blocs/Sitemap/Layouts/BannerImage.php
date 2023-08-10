<?php

namespace App\Nova\Blocs\Layouts;

use App\Nova\Blocs\Components\ImageField;
use App\Nova\Blocs\Components\TitleField;
use App\Nova\Blocs\Components\AnchorField;
use OptimistDigital\MediaField\MediaField;
use App\Nova\Blocs\Sitemap\CommonFlexibleBlocs;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class BannerImage extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = CommonFlexibleBlocs::BLOC_BANNER_IMAGE;

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Banner Image';

    /**
     * Get the fields displayed by the layout.
     *  
     * @return array
     */
    public function fields()
    {
        $content = array_merge(AnchorField::make(), TitleField::make(true), ImageField::make(true));
        return $content;
    }

    public function title()
    {
        return __('Banner Image');
    }
}