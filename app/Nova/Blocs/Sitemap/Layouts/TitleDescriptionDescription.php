<?php

namespace App\Nova\Blocs\Sitemap\Layouts;

use Outl1ne\NovaTrumbowygField\Trumbowyg;
use App\Nova\Blocs\Components\AnchorField;
use App\Nova\Blocs\Sitemap\CommonFlexibleBlocs;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use App\Nova\Blocs\Components\TitleDescriptionField;

class TitleDescriptionDescription extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = CommonFlexibleBlocs::BLOC_TITLE_DESCRIPTION_DESCRIPTION;

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Title & Description & Description';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        $content = array_merge(AnchorField::make(), TitleDescriptionField::make(true, false));

        $content[] = Trumbowyg::make(__("Description 1"), "description_1")->translatable();

        $content[] = Trumbowyg::make(__("Description 2"), "description_2")->translatable();

        return $content;
    }
}
