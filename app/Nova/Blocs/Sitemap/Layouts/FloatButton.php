<?php

namespace App\Nova\Blocs\Sitemap\Layouts;

use Laravel\Nova\Fields\Text;
use App\Nova\Blocs\Components\TitleField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class FloatButton extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'float_button';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Button float';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        $config = config('tiptap');

        $content = [
            Text::make('Url', 'url')
            ->translatable(),
        ];

        return array_merge(TitleField::make(true), $content);
        
    }

    public function title()
    {
        return __('Button float');
    }
}
