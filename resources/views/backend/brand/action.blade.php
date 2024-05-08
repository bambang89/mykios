@php
    $brand = $row;
@endphp
<x-livewire-tables::bs4.table.cell>
    {{ ++$this->index }}
</x-livewire-tables::bs4.table.cell>
<x-livewire-tables::bs4.table.cell>
    {{ $brand->name }}
</x-livewire-tables::bs4.table.cell>
<x-livewire-tables::bs4.table.cell>
    {{ $brand->desc }}
</x-livewire-tables::bs4.table.cell>
<x-livewire-tables::bs4.table.cell>
    {{ $brand->logo }}
</x-livewire-tables::bs4.table.cell>
<x-livewire-tables::bs4.table.cell>
    <x-utils.view-button :href="route('admin.brand.show', $brand)" />
    <x-utils.edit-button :href="route('admin.brand.edit', $brand)" />
    <x-utils.delete-button :href="route('admin.brand.destroy', $brand)" />
</x-livewire-tables::bs4.table.cell>