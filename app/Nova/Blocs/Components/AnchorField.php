<?php

namespace App\Nova\Blocs\Components;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Epartment\NovaDependencyContainer\NovaDependencyContainer;

class AnchorField
{
    public static function make() {

        return [
            Boolean::make(__("Section anchored"), "is_anchored"),
            // NovaDependencyContainer::make([
                Text::make(__("Anchor title"), "anchor_title")
                ->translatable()
			// ])
			// ->dependsOn('is_anchored', true)

        ];
    }
}
