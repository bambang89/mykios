@extends('backend.layouts.app')

@section('title', __('Items Management'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Items Management')
        </x-slot>
        <x-slot name="body">
        </x-slot>
    </x-backend.card>
@endsection
