<?php
namespace App\Nova;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
class FAQ extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\FAQ::class;

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
            // Text::make('Question[hy]', 'hy_short')->nullable(),
            // Textarea::make('Answer[hy]', 'hy_long')->hideFromIndex()->nullable(),
            Text::make('Вопрос', 'ru_short')->nullable(),
            Textarea::make('Ответ', 'ru_long')->hideFromIndex()->nullable(),
            // Text::make('Question[en]', 'en_short')->nullable(),
            // Textarea::make('Answer[en]', 'en_long')->hideFromIndex()->nullable(),
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
        return __('ЧаВО');
    }

     /**
      * Singular resource label
      */

    public static function singularLabel()
    {
       return __('ЧаВО');
    }
}
