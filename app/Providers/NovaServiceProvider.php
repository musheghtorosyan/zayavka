<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use DigitalCreative\CollapsibleResourceManager\CollapsibleResourceManager;
use DigitalCreative\CollapsibleResourceManager\Resources\TopLevelResource;
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
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new Help,
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new CollapsibleResourceManager([
                'navigation' => [
                    TopLevelResource::make([
                        'expanded' => false,
                        'label' => 'Пользователи',
                        'resources' => [
                            \App\Nova\User::class,
                            \App\Nova\Account::class,
                        ]
                    ]),
                    TopLevelResource::make([
                        'expanded' => false,
                        'label' => 'Письма и подписки',
                        'resources' => [
                            \App\Nova\Contact::class,
                            \App\Nova\Subscribe::class,
                        ]
                    ]),
                    TopLevelResource::make([
                        'expanded' => false,
                        'label' => 'Контент',
                        'resources' => [
                            \App\Nova\Homeslide::class,
                            \App\Nova\Contacttext::class,
                            \App\Nova\Block::class,
                            \App\Nova\About::class,
                            \App\Nova\Review::class,
                            \App\Nova\FAQ::class,
                            \App\Nova\Payment::class,
                            \App\Nova\Privacy::class,
                            \App\Nova\Term::class,
                        ]
                    ]),
                    TopLevelResource::make([
                        'expanded' => false,
                        'label' => 'Категории',
                        'resources' => [
                            \App\Nova\Categorie::class,
                            \App\Nova\Subcategorie::class,
                            \App\Nova\Exsubcategorie::class,
                        ]
                    ]),
                    TopLevelResource::make([
                        'expanded' => false,
                        'label' => 'Локаии',
                        'resources' => [
                            \App\Nova\Countrie::class,
                            \App\Nova\Citie::class,
                        ]
                    ]),
                    TopLevelResource::make([
                        'expanded' => false,
                        'label' => 'Новости',
                        'resources' => [
                            \App\Nova\Product::class,
                        ]
                    ]),
                    TopLevelResource::make([
                        'expanded' => false,
                        'label' => 'Акции',
                        'resources' => [
                            \App\Nova\Stock::class,
                        ]
                    ]),
                    TopLevelResource::make([
                        'expanded' => false,
                        'label' => 'Реклама',
                        'resources' => [
                            \App\Nova\Addfile::class,
                            \App\Nova\Add::class,
                        ]
                    ]),
                ]
            ])
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
