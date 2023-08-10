<?php

namespace App\Nova\Blocs\Sitemap\Layouts;

use App\Nova\Blocs\Components\AnchorField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use App\Nova\Blocs\Components\TitleDescriptionField;
use App\Nova\Blocs\Sitemap\CommonFlexibleBlocs;

class TitleDescription extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = CommonFlexibleBlocs::BLOC_TITLE_DESCRIPTION;

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Titre & Description';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return array_merge(AnchorField::make(), TitleDescriptionField::make());
    }
}