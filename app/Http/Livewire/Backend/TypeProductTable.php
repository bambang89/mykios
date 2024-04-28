<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Database\Eloquent\Builder;
use App\Models\TypeProduct;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TypeProductTable extends DataTableComponent
{

    protected $index = 0;
    
    public function query(): Builder
    {
        return TypeProduct::query();
    }

    public function columns(): array
    {

        return [
            Column::make('No')->format(fn () => ++$this->index),
            Column::make(__('Type'), 'type')
                ->sortable(),
            Column::make(__('Description'), 'desc')
                ->sortable(),
            Column::make(__('Actions')),
        ];
    }

    // /**
    //  * @return string
    //  */
    // public function rowView(): string
    // {
    //     return 'backend.auth.user.includes.row';
    // }

}
