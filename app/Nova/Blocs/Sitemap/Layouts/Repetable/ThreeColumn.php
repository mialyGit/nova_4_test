<?php

namespace App\Nova\Blocs\Sitemap\Layouts\Repetable;

use App\Nova\Blocs\Sitemap\CommonFlexibleBlocs;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use App\Nova\Blocs\Components\TitleDescriptionField;

class ThreeColumn extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = CommonFlexibleBlocs::BLOC_THREE_COLUMN;

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = '3 colonnes';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return TitleDescriptionField::make(false, true, false, true);
    }
}
