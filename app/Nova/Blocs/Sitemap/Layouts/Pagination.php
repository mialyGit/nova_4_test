<?php

namespace App\Nova\Blocs\Sitemap\Layouts;

use Laravel\Nova\Fields\Text;
use App\Nova\Blocs\Sitemap\CommonFlexibleBlocs;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class Pagination extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = CommonFlexibleBlocs::BLOC_PAGINATION;

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Pagination';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make(__("Prev Url"), "prev_url")
            ->placeholder('ex:/sitemap/page-1')
            ->translatable(),
            Text::make(__("Next Url"), "next_url")
            ->placeholder('ex:/sitemap/page-2')
            ->translatable()
        ];
    }
}
