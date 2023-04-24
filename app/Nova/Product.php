<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Http\Requests\NovaRequest;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Product::class;

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
        'id','ru_title','ru_desc',
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
            Image::make('Главная картинка','pic1')->disk('public')->hideFromIndex()->nullable(),
            // Text::make('Title[hy]', 'hy_title')->nullable(),
            // NovaTinyMCE::make('Description[hy]', 'hy_desc')->options(['height' => '500'])->nullable()->hideFromIndex(),
            Text::make('Заголовок', 'ru_title')->nullable(),
            NovaTinyMCE::make('Контент', 'ru_desc')->options(['height' => '500'])->nullable()->hideFromIndex(),
            // Text::make('Title[en]', 'en_title')->nullable(),
            // NovaTinyMCE::make('Description[en]', 'en_desc')->options(['height' => '500'])->nullable()->hideFromIndex(),
            // Select::make('Type','type')->options([
            //         '' => 'Default',
            //         'new' => 'New',
            //         'sale' => 'Sale',
            //     ]),
            // Number::make('Price','price')->min(0)->max(9999999999999)->step(1),
            // Number::make('Old price','sale')->min(0)->max(9999999999999)->step(1),
            Image::make('Картинка 2','pic2')->disk('public')->hideFromIndex()->nullable(),
            Image::make('Картинка 3','pic3')->disk('public')->hideFromIndex()->nullable(),
            Image::make('Картинка 4','pic4')->disk('public')->hideFromIndex()->nullable(),
            Image::make('Картинка 5','pic5')->disk('public')->hideFromIndex()->nullable(),
            
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
        return __('Новости');
    }

     /**
      * Singular resource label
      */

    public static function singularLabel()
    {
       return __('Новости');
    }
}
