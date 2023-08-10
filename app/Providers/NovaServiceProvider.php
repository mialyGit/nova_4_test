<?php

namespace App\Providers;

use App\Nova\Page;
use App\Nova\User;
use Laravel\Nova\Nova;
use App\Nova\PageCategory;
use App\Policies\RolePolicy;
use Illuminate\Http\Request;
use Laravel\Nova\Menu\MenuItem;
use App\Policies\PermissionPolicy;
use Laravel\Nova\Menu\MenuSection;
use Outl1ne\NovaMediaHub\MediaHub;
use Vyuldashev\NovaPermission\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Vyuldashev\NovaPermission\Permission;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::dashboard(\App\Nova\Dashboards\Main::class),

                MenuSection::make(__('Content'), [
                    MenuItem::resource(Page::class),
                    MenuItem::resource(PageCategory::class),
                    // MenuItem::resource(CustomPage::class)
                ])->icon('document-text')->collapsable(),

                (new MediaHub())->menu($request),

                MenuSection::make(__('Users'), [
                    MenuItem::resource(User::class),
                    MenuItem::resource(Role::class),
                    MenuItem::resource(Permission::class),
                ])->icon('user')->collapsable()

            ];

            // if($request->user()->hasRole('Admin')) {
                // $menus [] = 
                // $menus [] = MenuSection::make(__('Settings'), [
                //     MenuItem::resource(Company::class),
                //     MenuItem::resource(Region::class),
                //     MenuItem::resource(Country::class),
                // ])->icon('Cog')->collapsable();
            // }

            // return $menus;
            
        });

        
        Nova::footer(function ($request) {
            return Blade::render('
                <p class="text-center">Powered by <a class="link-default" href="https://nova.laravel.com">Laravel Nova</a> · v4.24.4 (Silver Surfer)</p>
                <p class="text-center">© 2023 Laravel LLC · by Taylor Otwell and David Hemphill.</p>
            ');
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            \Outl1ne\NovaMediaHub\MediaHub::make(),
            new \Outl1ne\PageManager\PageManager(),
            \Vyuldashev\NovaPermission\NovaPermissionTool::make()
            ->rolePolicy(RolePolicy::class)
            ->permissionPolicy(PermissionPolicy::class),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
