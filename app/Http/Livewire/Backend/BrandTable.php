<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Brand;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class BrandTable extends DataTableComponent
{
    protected $index = 0;

    public function columns(): array
    {
        return [
            Column::make('No'),
            Column::make(__('Brand'))
                ->sortable(),
            Column::make(__('Description'))
                ->sortable(),
            Column::make(__('Logo'))
                ->sortable(),
            Column::make(__('Actions')),
        ];
    }

    public function query(): Builder
    {
        return Brand::query();
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.brand.action';
    }
}
