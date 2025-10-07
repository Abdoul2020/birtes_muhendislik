<?php

namespace App\Http\Livewire\PowerGrid;

use App\Models\Resimgalleri;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridColumns, PowerGridEloquent};

final class RessimGalleriTable extends PowerGridComponent
{
    use ActionButton;

    public bool $multiSort = true;
    public int $perPage = 10;
    public array $perPageValues = [10, 20];

   

    

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Projects>
     */
    
    public function datasource(): Builder
{
    return Resimgalleri::query()
        ->leftJoin('places', 'resimgalleri.place_id', '=', 'places.id')
        ->select('resimgalleri.*', 'places.title as place');
}


    

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [
            'place' => [
                'title'
            ],
            'room' => [
                'title'
            ],
        ];
    }

   
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            //            ->addColumn('status')
            ->addColumn('order')
            
            ->addColumn('place_id')
            ->addColumn('title')

            /** Example of custom column using a closure **/
            ->addColumn('title_lower', function (Resimgalleri $model) {
                return strtolower(e($model->title));
            })

            ->addColumn('slug')
            ->addColumn('description')
            ->addColumn('poster', fn(Resimgalleri $model) => "<img src=" . asset(e($model->poster ?? 'img/placeholder-poster.jpg')) . " width='100'/>");

    }

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('Sıra', 'order')
            ->hidden(true, false)
            ->sortable()
            ->searchable(),
            Column::make('Yer', 'place')
            ->hidden(true, false)
            ->sortable()
            ->searchable(),
            Column::make('Proje', 'title')->sortable()->searchable(),
            Column::make('Açıklama', 'description')->hidden(),
            Column::make('Proje Posteri', 'poster'),
        ];
    }

   

    /**
     * PowerGrid Room Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            Button::make('edit', '<i class="fa-solid fa-pen fs-4 me-2"></i>')
                ->class('btn btn-color-warning btn-active-color-info ')
                ->target('_self')
                ->route('admin.ressimgalleri.edit', ['room' => 'id']),

            Button::make('destroy', '<i class="fa-solid fa-trash fs-4 me-2"></i>')
                ->class('btn btn-color-danger btn-active-color-info')
                ->target('_self')
                ->route('admin.ressimgalleri.destroy', ['room' => 'id'])
                ->method('delete')
        ];
    }



    /**
     * PowerGrid Room Action Rules.
     *
     * @return array<int, RuleActions>
     */
}
