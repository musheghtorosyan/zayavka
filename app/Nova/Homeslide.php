<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;

class Homeslide extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Homeslide::class;

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
        'id','ru_title','ru_short',
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
            Image::make('Картинка','pic')->disk('public')->hideFromIndex()->nullable(),
            Image::make('Картинка(mobile)','pic2')->disk('public')->hideFromIndex()->nullable(),
            // Text::make('Title[hy]', 'hy_title')->nullable(),
            // Textarea::make('Text[hy]', 'hy_short')->hideFromIndex()->nullable(),
            Text::make('Заголовок', 'ru_title')->nullable(),
            Textarea::make('Текст', 'ru_short')->hideFromIndex()->nullable(),
            // Text::make('Title[en]', 'en_title')->nullable(),
            // Textarea::make('Text[en]', 'en_short')->hideFromIndex()->nullable(),
            // Text::make('Button name[hy]', 'hy_btn')->nullable(),
            Text::make('Текст кнопки', 'ru_btn')->nullable(),
            // Text::make('Button name[en]', 'en_btn')->nullable(),
            Text::make('Аддрес кнопки', 'link')->nullable(),
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

     /**
     * The resource label
     * 
     */

    public static function label()
    {
        return __('Главный слайдер');
    }

     /**
      * Singular resource label
      */

    public static function singularLabel()
    {
       return __('Главный слайдер');
    }
}
