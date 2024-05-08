@inject('model', '\App\Domains\Auth\Models\User')
@extends('backend.layouts.app')

@section('title', __('Add Unit Product'))

@section('content')
    <x-forms.patch :action="route('admin.unit.update', $typeProduct)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Unit Product')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.unit.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div>
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Unit Type Product')</label>

                        <div class="col-md-10">
                            <input type="text" name="type" class="form-control" placeholder="{{ __('Type Product ex: box,picies,pack,dll') }}" value="{{ old('type') ?? $unitList->unit }}" maxlength="100" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Description')</label>

                        <div class="col-md-10">
                            <textarea class="form-control" name="desc" placeholder="{{ __('Description') }}" rows="3">{{ old('desc') ?? $unitList->desc }}</textarea>
                        </div>
                    </div>

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Unit')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection