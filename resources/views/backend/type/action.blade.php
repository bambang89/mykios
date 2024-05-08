@php
    $type = $row;
@endphp
<x-livewire-tables::bs4.table.cell>
    {{ ++$this->index }}
</x-livewire-tables::bs4.table.cell>
<x-livewire-tables::bs4.table.cell>
    {{ $type->type }}
</x-livewire-tables::bs4.table.cell>
<x-livewire-tables::bs4.table.cell>
    {{ $type->desc }}
</x-livewire-tables::bs4.table.cell>
<x-livewire-tables::bs4.table.cell>
    <x-utils.view-button :href="route('admin.type.show', $type)" />
    <x-utils.edit-button :href="route('admin.type.edit', $type)" />
    <x-utils.delete-button :href="route('admin.type.destroy', $type)" />
</x-livewire-tables::bs4.table.cell>