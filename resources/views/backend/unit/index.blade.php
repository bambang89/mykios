@extends('backend.layouts.app')

@section('title', __('Unit Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Unit Management')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.unit.create')"
                :text="__('Create Unit Type')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:backend.unit-list-table />
        </x-slot>
    </x-backend.card>
@endsection
