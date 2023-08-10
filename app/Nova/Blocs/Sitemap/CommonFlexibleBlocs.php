<?php

namespace App\Nova\Blocs\Sitemap;

use App\Nova\Blocs\Sitemap\Bloc;
use App\Nova\Blocs\Layouts\BannerImage;
use Whitecube\NovaFlexibleContent\Flexible;
use App\Nova\Blocs\Sitemap\Layouts\Pagination;
use App\Nova\Blocs\Sitemap\Layouts\FloatButton;
use App\Nova\Blocs\Sitemap\Layouts\ImageFullWidth;
use App\Nova\Blocs\Sitemap\Layouts\TitleDescription;
use App\Nova\Blocs\Sitemap\Layouts\Repetable\ImageDescription;
use App\Nova\Blocs\Sitemap\Layouts\TitleDescriptionDescription;

class CommonFlexibleBlocs
{
    const BLOC_HERO_IMAGE = 'BlocHeroImage';
    const BLOC_SLIDER = 'BlocSlider';
    const BLOC_TITLE_DESCRIPTION = 'BlocTitreDescription';
    const BLOC_TITLE_DESCRIPTION_DESCRIPTION = 'BlocTitreDescriptionDescription';
    const BLOC_LIST = 'BlocList';
    const BLOC_IMAGE_TITLE_DESCRIPTION = 'BlocWhyChooseUs';
    const BLOC_IMAGE_DESCRIPTION = 'BlocImageDescription';
    const BLOC_THREE_COLUMN = 'BlocThreeColumn';
    const BLOC_IMAGE_URL = 'BlocPartners';
    const BLOC_BANNER_IMAGE = 'BlocBannerImage';
    const BLOC_IMAGE_FULL_WIDTH = 'BlocImageFullWidth';
    const BLOC_TABLE = 'BlocTable';
    const BLOC_DATE_TITLE = 'BlocDateTitle';
    const BLOC_PAGINATION = 'BlocPagination';

    public static function get()
    {
        return Flexible::make('Contenu', 'flexible_content')
            ->fullWidth()
            ->confirmRemove()
            ->button(__('Add bloc'))
            // ->addLayout(HeroImage::class)
            ->addLayout(__('Slider'), self::BLOC_SLIDER, Bloc::slider())
            ->addLayout(TitleDescription::class)
            ->addLayout(TitleDescriptionDescription::class)
            ->addLayout(__('Image & Title & Description'), self::BLOC_IMAGE_TITLE_DESCRIPTION, Bloc::imageTitleDescription())
            ->addLayout(__('Image & Url'), self::BLOC_IMAGE_URL, Bloc::imageUrl())
            ->addLayout(BannerImage::class)
            ->addLayout(ImageFullWidth::class)
            ->addLayout(__('Bloc List'), self::BLOC_LIST, Bloc::blocList())
            ->addLayout(ImageDescription::class)
            ->addLayout(__('Bloc 3 colonnes'), self::BLOC_THREE_COLUMN, Bloc::threeColumn())
            ->addLayout(FloatButton::class)
            ->addLayout(__('Bloc tableau'), self::BLOC_TABLE, Bloc::table())
            ->addLayout(__('Date & Title'), self::BLOC_DATE_TITLE, Bloc::dateTitle())
            ->addLayout(Pagination::class)
            ;
    }
}
