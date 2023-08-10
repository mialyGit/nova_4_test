<?php

namespace App\Nova\Blocs\Sitemap\Layouts\Repetable;

use Laravel\Nova\Fields\Select;
use Froala\NovaFroalaField\Froala;
use Outl1ne\NovaTrumbowygField\Trumbowyg;
use App\Nova\Blocs\Components\AnchorField;
use OptimistDigital\MediaField\MediaField;
use App\Nova\Blocs\Sitemap\CommonFlexibleBlocs;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class ImageDescription extends Layout
{   
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = CommonFlexibleBlocs::BLOC_IMAGE_DESCRIPTION;

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Image & Description';

    /**
     * Get the fields displayed by the layout.
     *  
     * @return array
     */
    public function fields()
    {   $content = [
            MediaHubField::make(__('Image'),'featured_image')->translatable(),
            Trumbowyg::make(__("Description"), 'description')->translatable()
        ];
        
        return array_merge(
            AnchorField::make(),
            [
                Select::make(__('Background section'),'bg_section')->options([
                    'white' => __('White'),
                    'black' => __('Black'),
                ]) 
                
            ],
            $content
        );
    }

    public function title()
    {
        return __('Image & Description');
    }
}
