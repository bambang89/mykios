@extends('backend.layouts.app')

@section('title', __('Sub Type Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Sub Type Management')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.subtype.create')"
                :text="__('Create Sub Type Items')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:backend.sub-type-product-table/>
        </x-slot>
    </x-backend.card>
@endsection
