<?php

namespace App\Nova;

use Laravel\Nova\Panel;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\BelongsTo;
use Outl1ne\NovaTrumbowygField\Trumbowyg;
use Laravel\Nova\Http\Requests\NovaRequest;
use App\Nova\Blocs\Sitemap\CommonFlexibleBlocs;
use Alexwenzel\DependencyContainer\HasDependencies;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Outl1ne\PageManager\Nova\Fields\PrefixSlugField;
use Alexwenzel\DependencyContainer\DependencyContainer;

class Page extends Resource
{
    use HasDependencies;

    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Page>
     */
    public static $model = \App\Models\Page::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'category.name'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            new Panel(__('Title'), $this->titleFields()),
            new Panel(__('Anchor'), $this->contentAnchors()),
            new Panel(__('Blocs'), $this->contentFields()),
            new Panel(__('SEO'), $this->metaFields()),
        ];
    }

    public function titleFields()
    {
        return [
            Heading::make(__('Message Page'))->asHtml(),
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('Titre', 'title')
                ->rules('required')
                ->translatable(),
            PrefixSlugField::make('Slug')
                ->from('title.*')
                ->rules('required')
                ->translatable()
                ->hideFromIndex()
                ->creationRules('unique:pages,slug')
                ->updateRules('unique:pages,slug,{{resourceId}}'),
            BelongsTo::make(__('Category'), 'category', 'App\Nova\PageCategory')
            ->displayUsing(function ($category) {
                return $category->name;
            })
        ];
    }

    public function contentFields()
    {
        return [
            CommonFlexibleBlocs::get()
        ];
    }

    public function contentAnchors()
    {
        return [
            Boolean::make(__('Page has anchors'), 'has_anchor')
            ->hideFromIndex(),
            DependencyContainer::make([
                MediaHubField::make(__('Background image'), 'anchor_background')
                ->hideFromIndex()
            ])->dependsOn('has_anchor', true),
            
        ];
    }
    
    public function metaFields()
    {
        return [
            Text::make('Meta titre', 'meta_title')
            ->translatable(),
            Text::make('Mot clé', 'meta_keyword')
                ->translatable(),
            Trumbowyg::make('Meta description', 'meta_description')
                ->translatable()
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
