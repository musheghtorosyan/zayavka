<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Review extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Review::class;

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
        'id','ru_short','ru_long',
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
            ID::make(__('ID'), 'id')->sortable(),
            Image::make('картинка пользователя','pic')->disk('public')->hideFromIndex()->nullable(),
            // Text::make('User name[hy]', 'hy_name')->nullable(),
            // Textarea::make('Short review[hy]', 'hy_short')->hideFromIndex()->nullable(),
            // Textarea::make('Review[hy]', 'hy_long')->hideFromIndex()->nullable(),
            Text::make('Имя', 'ru_name')->nullable(),
            Textarea::make('Короткый отзыв', 'ru_short')->hideFromIndex()->nullable(),
            Textarea::make('Отзыв', 'ru_long')->hideFromIndex(),
            // Text::make('User name[en]', 'en_name')->nullable(),
            // Textarea::make('Short review[en]', 'en_short')->hideFromIndex()->nullable(),
            // Textarea::make('Review[en]', 'en_long')->hideFromIndex()->nullable(),
            //Image::make('Social logo','logo')->disk('public')->hideFromIndex()->nullable(),
            //Text::make('Social link', 'link'),


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
    public static function label()
    {
        return __('Отзыви');
    }

     /**
      * Singular resource label
      */

    public static function singularLabel()
    {
       return __('Отзыви');
    }
}
