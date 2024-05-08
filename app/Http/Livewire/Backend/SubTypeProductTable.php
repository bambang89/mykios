<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Database\Eloquent\Builder;
use App\Models\SubTypeProduct;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class SubTypeProductTable extends DataTableComponent
{

    protected $index = 0;
    
    public function query(): Builder
    {
        $query = SubTypeProduct::with('typeProduct');
        return $query;
    }

    public function columns(): array
    {

        return [
            Column::make('No')->format(fn () => ++$this->index),
            Column::make(__('Type'))
                ->sortable(),
            Column::make(__('Sub Type'))
                ->sortable(),
            Column::make(__('Description'))
                ->sortable(),
            Column::make(__('Actions')),
        ];
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.type.sub.action';
    }

}
