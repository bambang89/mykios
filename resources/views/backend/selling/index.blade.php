@extends('backend.layouts.app')

@section('title', __('Selling'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Selling')
        </x-slot>

        <x-slot name="body">
            <!-- <livewire:backend.users-table /> -->
        </x-slot>
    </x-backend.card>
@endsection
