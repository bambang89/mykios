@inject('model', '\App\Domains\Auth\Models\User')
@extends('backend.layouts.app')

@section('title', __('Add Product Type'))

@section('content')
    <x-forms.post :action="route('admin.brand.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create New Branch Item')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.brand.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div x-data="{userType : '{{ $model::TYPE_USER }}'}">

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Name Brand')</label>

                        <div class="col-md-10">
                            <input type="text" name="name" class="form-control" placeholder="{{ __('Name Brand') }}" value="{{ old('name') }}" maxlength="100" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Description')</label>

                        <div class="col-md-10">
                            <textarea class="form-control" name="desc" placeholder="{{ __('Description') }}" rows="3">{{ old('desc') }}</textarea>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="logo" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Role')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection