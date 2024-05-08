<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Database\Eloquent\Builder;
use App\Models\UnitList;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class UnitListTable extends DataTableComponent
{
    protected $index = 0;

    public function columns(): array
    {
        return [
            Column::make('No'),
            Column::make(__('Unit Type'))
                ->sortable(),
            Column::make(__('Description'))
                ->sortable(),
            Column::make(__('Actions')),
        ];
    }

    public function query(): Builder
    {
        return UnitList::query();
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.unit.action';
    }
}
