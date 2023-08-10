<?php

namespace App\Nova\Blocs\Sitemap;

use Laravel\Nova\Fields\Select;
use App\Nova\Blocs\Components\TitleField;
use App\Nova\Blocs\Components\AnchorField;
use Whitecube\NovaFlexibleContent\Flexible;
use App\Nova\Blocs\Components\TitleDescriptionField;
use App\Nova\Blocs\Sitemap\Layouts\Repetable\Slider;
use App\Nova\Blocs\Sitemap\Layouts\Repetable\BlocList;
use App\Nova\Blocs\Sitemap\Layouts\Repetable\ImageUrl;
use App\Nova\Blocs\Sitemap\Layouts\Tables\TableColumn;
use App\Nova\Blocs\Sitemap\Layouts\Repetable\DateTitle;
use App\Nova\Blocs\Sitemap\Layouts\Repetable\ThreeColumn;
use App\Nova\Blocs\Sitemap\Layouts\Repetable\ImageTitleDescription;

class Bloc
{
    public static function slider()
    {
        return array_merge(
            AnchorField::make(), [
            Flexible::make(__('Slider'), 'slider_repeater')
                ->fullWidth()
                ->button(__('Add slider'))
                ->addLayout(Slider::class)
            ]
        );
    }

    public static function imageTitleDescription()
    {
        return array_merge(
            AnchorField::make(), [
            Flexible::make(__('Image & Title & Description'), 'image_title_description_repeater')
                ->fullWidth()
                ->button(__('Add bloc'))
                ->addLayout(ImageTitleDescription::class)
            ]
        );
    }

    public static function imageUrl()
    {
        return array_merge(
            AnchorField::make(), [
            Flexible::make('Image & Url', 'image_url_repeater')
                ->fullWidth()
                ->button(__('Add bloc'))
                ->addLayout(ImageUrl::class)
            ]
        );
    }

    public static function blocList()
    {

        $content =  TitleDescriptionField::make(false, false);
        $content[] =  Flexible::make(__("List"), 'bloc_list_repeater')
        ->button(__('Add bloc'))
        ->fullWidth()
        ->addLayout(BlocList::class);
        return array_merge(AnchorField::make(), $content);
        
    }

    public static function threeColumn()
    {
        return array_merge(
            AnchorField::make(), 
            [
                Select::make(__('Background section'),'bg_section')->options([
                    'white' => __('White'),
                    'black' => __('Black'),
                ]),
                Flexible::make(__('Bloc 3 colonnes'), 'three_column_repeater')
                    ->fullWidth()
                    ->button(__('Add bloc'))
                    ->addLayout(ThreeColumn::class)
                ]
            );
    }

    public static function table()
    {
        return array_merge(
            AnchorField::make(), 
            TitleField::make(true),
            [
                Select::make(__('Background section'),'bg_section')->options([
                    'white' => __('White'),
                    'black' => __('Black'),
                ]),
                Flexible::make(__('Columns'), 'column_repeater')
                    ->fullWidth()
                    ->button(__('Add column'))
                    ->addLayout(TableColumn::class)
                    ->help(
                        '<h4 style="color:rgba(239,68,68)"> Seules les 4 premiers sont affichées</h4>'
                    ),
                ]
            );
    }

    public static function dateTitle()
    {
        return array_merge(
            AnchorField::make(), 
            [
                Select::make(__('Background section'),'bg_section')->options([
                    'white' => __('White'),
                    'black' => __('Black'),
                ]),
                Flexible::make(__('Date & Title'), 'date_title_repeater')
                    ->fullWidth()
                    ->button(__('Add bloc'))
                    ->addLayout(DateTitle::class),
                ]
            );
    }
}
