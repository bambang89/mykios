@extends('backend.layouts.app')

@section('title', __('Type Management'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Type Management')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.type.create')"
                :text="__('Create Type Items')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:backend.type-product-table/>
        </x-slot>
    </x-backend.card>
@endsection
