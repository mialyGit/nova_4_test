<?php

namespace App\Nova\Blocs\Sitemap\Layouts\Repetable;

use Whitecube\NovaFlexibleContent\Layouts\Layout;
use App\Nova\Blocs\Components\ImageWithPostionField;
use App\Nova\Blocs\Components\TitleDescriptionField;

class ImageTitleDescription extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'image_title_description';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Image & Titre & Description';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return array_merge(TitleDescriptionField::make(), ImageWithPostionField::make(true));
    }

    public function title()
    {
        return __('Image & Title & Description');
    }
}
