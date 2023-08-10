<?php

namespace App\Nova\Blocs\Sitemap\Layouts\Repetable;

use Laravel\Nova\Fields\Date;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use App\Nova\Blocs\Components\TitleDescriptionField;

class DateTitle extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'date_title';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Date & Title';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        $content = [
            Date::make('Date', 'date_field')
            ->resolveUsing(function ($value) {
                return $value;
            })
        ];

        return array_merge($content, TitleDescriptionField::make(false, true, false));
        
    }

    public function title()
    {
        return __('Date & Title');
    }
}
