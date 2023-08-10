<?php

namespace App\Nova\Blocs\Sitemap\Layouts\Repetable;

use Laravel\Nova\Fields\Text;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class BlocList extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'bloc_list';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'List';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make(__("Content"), "content")
            ->translatable(),
            Text::make('Url', 'url')
            ->translatable(),
        ];
        
    }

    public function title()
    {
        return __('List');
    }
}