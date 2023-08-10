<?php

namespace App\Nova\Blocs\Components;

use Laravel\Nova\Fields\Select;

class ImageWithPostionField
{
    public static function make($hasLink = false) {

        $content = [
            Select::make(__('Image position'),'image_position')->options([
                'right' => __('Right'),
                'left' => __('Left'),
            ]),
            Select::make(__('Image size'),'image_size')->options([
                'small' => __('Small'),
                'middle' => __('Middle'),
                'normal' => __('Normal')
            ])
        ];

        return array_merge($content, ImageField::make($hasLink));
    }
}
