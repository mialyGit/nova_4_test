<?php

namespace App\Nova\Blocs\Sitemap\Layouts\Tables;

use Laravel\Nova\Fields\Text;
use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class TableColumn extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'table_column';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Column';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make(__("Title"), "title")
            ->translatable(),
            Flexible::make(__('Rows'), 'row_repeater')
                    ->fullWidth()
                    ->button(__('Add row'))
                    ->addLayout(TableRow::class)
        ];
        
    }

    public function title()
    {
        return __('Column');
    }
}
