<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;

class About extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\About::class;

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
        'id','ru_short','ru_long'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable()->hideFromIndex(),
            Image::make('Картинка','pic')->disk('public')->nullable(),
            // NovaTinyMCE::make('Short description[hy]', 'hy_short')->options(['height' => '300'])->nullable(),
            // NovaTinyMCE::make('Description[hy]', 'hy_long')->options(['height' => '500'])->nullable(),
            NovaTinyMCE::make('Короткое описание', 'ru_short')->options(['height' => '300'])->nullable(),
            NovaTinyMCE::make('Описание', 'ru_long')->options(['height' => '500'])->nullable(),
            // NovaTinyMCE::make('Short description[en]', 'en_short')->options(['height' => '300'])->nullable(),
            // NovaTinyMCE::make('Description[en]', 'en_long')->options(['height' => '500'])->nullable(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

    public static function authorizedToCreate(Request $request)
    {
        return false;
    }

    public function authorizedToDelete(Request $request)
    {
        return false;
    }
    /**
     * The resource label
     * 
     */

    public static function label()
    {
        return __('О нас');
    }

     /**
      * Singular resource label
      */

    public static function singularLabel()
    {
       return __('О нас');
    }
}
