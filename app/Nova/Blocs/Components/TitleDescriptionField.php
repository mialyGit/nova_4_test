<?php

namespace App\Nova\Blocs\Components;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Froala\NovaFroalaField\Froala;
use Outl1ne\NovaTrumbowygField\Trumbowyg;

class TitleDescriptionField
{
    public static function make($withSubTitle = false, $withDescription = true, $withBgColor = true, $titleIsEditor = false) {
        
        $content = $withBgColor 
        ? 
        [ Select::make(__('Background section'),'bg_section')->options([
                'white' => __('White'),
                'black' => __('Black'),
            ]) 
        ] : [] ;

        $content = array_merge($content, TitleField::make($titleIsEditor));

        if($withSubTitle){
            $content[] = Text::make(__("SubTitle"), "sub_title")
            ->translatable();
        }

        if($withDescription){
            $content[] = Trumbowyg::make(__("Description"), "description")->translatable();
        }
        
        return $content;
    }
}
