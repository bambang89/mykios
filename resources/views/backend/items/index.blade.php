@extends('backend.layouts.app')

@section('title', __('Items Management'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Items Management')
        </x-slot>
        
        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.items.create')"
                :text="__('Create Items')"
            />
        </x-slot>

        <x-slot name="body">
        </x-slot>
    </x-backend.card>
@endsection
