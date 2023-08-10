<?php

namespace App\Nova\Blocs\Components;

use Laravel\Nova\Fields\Text;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class ImageField
{
    public static function make($hasLink = false) {

        $content = [
            MediaHubField::make(__('Image'),'featured_image')->translatable(),
            Text::make('Alt image', 'image_alt')->translatable()
        ];

        if($hasLink) {
            $content[] = Text::make('Lien d\'image', 'image_link')
            ->placeholder('https://example.com')
            ->translatable();
        }

        return $content;

    }
}
