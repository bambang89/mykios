@extends('backend.layouts.app')

@section('title', __('Brand Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Brand Management')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.brand.create')"
                :text="__('Create Type Items')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:backend.brand-table/>
        </x-slot>
    </x-backend.card>
@endsection
