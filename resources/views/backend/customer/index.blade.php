@extends('backend.layouts.app')

@section('title', __('Customer Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Customer Management')
        </x-slot>

        <x-slot name="body">
            <!-- <livewire:backend.users-table /> -->
        </x-slot>
    </x-backend.card>
@endsection
