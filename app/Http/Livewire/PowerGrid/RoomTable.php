<?php

namespace App\Http\Livewire\PowerGrid;

use App\Models\Room;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\{
    Button,
    Column,
    Exportable,
    Footer,
    Header,
    PowerGrid,
    PowerGridComponent,
    PowerGridEloquent
};
use PowerComponents\LivewirePowerGrid\Rules\{RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

final class RoomTable extends PowerGridComponent
{
    use ActionButton;

    public bool $multiSort = true;
    public int $perPage = 10;
    public array $perPageValues = [10, 20];

   

    

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Room>
     */
    
    public function datasource(): Builder
{
    return Room::query()
        ->leftJoin('places', 'rooms.place_id', '=', 'places.id')
        ->select('rooms.*', 'places.title as place');
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
            ->addColumn('title_lower', function (Room $model) {
                return strtolower(e($model->title));
            })

            ->addColumn('slug')
            ->addColumn('description')
            ->addColumn('poster', fn(Room $model) => "<img src=" . asset(e($model->poster ?? 'img/placeholder-poster.jpg')) . " width='100'/>");

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
            Column::make('Hizmet', 'title')->sortable()->searchable(),
            Column::make('Açıklama', 'description')->hidden(),
            Column::make('Hizmet Posteri', 'poster'),
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
                ->route('admin.rooms.edit', ['room' => 'id']),

            Button::make('destroy', '<i class="fa-solid fa-trash fs-4 me-2"></i>')
                ->class('btn btn-color-danger btn-active-color-info')
                ->target('_self')
                ->route('admin.rooms.destroy', ['room' => 'id'])
                ->method('delete')
        ];
    }



    /**
     * PowerGrid Room Action Rules.
     *
     * @return array<int, RuleActions>
     */
}
