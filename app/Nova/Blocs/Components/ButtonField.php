<?php

namespace App\Nova\Blocs\Components;

use Laravel\Nova\Fields\Text;

class ButtonField
{
    public static function make() {

        return [
            Text::make(__("Button label"), "button_label")
            ->translatable(),
            Text::make(__("Button link"), "button_link")
            ->translatable()
        ];
    }
}
