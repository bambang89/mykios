@extends('backend.layouts.app')

@section('title', __('Type Management'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Type Management')
        </x-slot>

        <x-slot name="body">
            <livewire:backend.type-product-table/>
        </x-slot>
    </x-backend.card>
@endsection
