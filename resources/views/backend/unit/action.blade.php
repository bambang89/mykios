@php
    $unit = $row;
@endphp
<x-livewire-tables::bs4.table.cell>
    {{ ++$this->index }}
</x-livewire-tables::bs4.table.cell>
<x-livewire-tables::bs4.table.cell>
    {{ $unit->unit }}
</x-livewire-tables::bs4.table.cell>
<x-livewire-tables::bs4.table.cell>
    {{ $unit->desc }}
</x-livewire-tables::bs4.table.cell>
<x-livewire-tables::bs4.table.cell>
    <x-utils.view-button :href="route('admin.unit.show', $unit)" />
    <x-utils.edit-button :href="route('admin.unit.edit', $unit)" />
    <x-utils.delete-button :href="route('admin.unit.destroy', $unit)" />
</x-livewire-tables::bs4.table.cell>