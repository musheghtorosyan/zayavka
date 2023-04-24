<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;

class Citie extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Citie::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'no';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'no','ru_name'
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
            BelongsTo::make('Республики','Cities','App\Nova\Countrie')
                ->rules('required')
                ->sortable(),
            // BelongsTo::make('Cities'), 
            // Select::make('Country','cid')->options([
            //     'mercedes' => 'Mercedes',
            //     'audi' => 'Audi',
            //     'bmw' => 'BMW',
            // ]),
            // Text::make('Name[hy]', 'hy_name')->nullable(),
            Text::make('Край', 'ru_name')->nullable(),
            // Text::make('Name[en]', 'en_name')->nullable(),
            // Text::make('Shippment[AMD]', 'shippment')->nullable(),
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
        return __('Край');
    }

     /**
      * Singular resource label
      */

    public static function singularLabel()
    {
       return __('Край');
    }
}
