@php
    $subtype = $row;
@endphp
<x-livewire-tables::bs4.table.cell>
    {{ ++$this->index }}
</x-livewire-tables::bs4.table.cell>
<x-livewire-tables::bs4.table.cell>
    {{ $subtype->typeProduct->type }}
</x-livewire-tables::bs4.table.cell>
<x-livewire-tables::bs4.table.cell>
    {{ $subtype->sub_type }}
</x-livewire-tables::bs4.table.cell>
<x-livewire-tables::bs4.table.cell>
    {{ $subtype->desc }}
</x-livewire-tables::bs4.table.cell>
<x-livewire-tables::bs4.table.cell>
    <x-utils.view-button :href="route('admin.subtype.show', $subtype)" />
    <x-utils.edit-button :href="route('admin.subtype.edit', $subtype)" />
    <x-utils.delete-button :href="route('admin.subtype.destroy', $subtype)" />
</x-livewire-tables::bs4.table.cell>