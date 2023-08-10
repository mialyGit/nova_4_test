<?php

namespace App\Nova\Blocs\Sitemap\Layouts\Tables;

use Laravel\Nova\Fields\Text;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class TableRow extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'table_row';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Row';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make(__("Title"), "title")
            ->translatable()
        ];
        
    }

    public function title()
    {
        return __('Row');
    }
}
