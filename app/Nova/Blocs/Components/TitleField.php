<?php

namespace App\Nova\Blocs\Components;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Froala\NovaFroalaField\Froala;
use Outl1ne\NovaTrumbowygField\Trumbowyg;

class TitleField
{
    public static function make($isEditor = false) {
        $content = $isEditor ? 
        Trumbowyg::make(__("Title"), "title")
        ->translatable() :
        Text::make(__("Title"), "title")
        ->translatable();

        return [
            $content,
            Select::make(__('Title color'),'title_color')->options([
                'white' => __('White'),
                'brown' => __('Brown'),
            ])
        ];
    }
}
