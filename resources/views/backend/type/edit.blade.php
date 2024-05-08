@inject('model', '\App\Domains\Auth\Models\User')
@extends('backend.layouts.app')

@section('title', __('Update Type Items'))

@section('content')
    <x-forms.patch :action="route('admin.type.update', $typeProduct)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Items Type')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.type.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Type Product')</label>

                        <div class="col-md-10">
                            <input type="text" name="type" class="form-control" placeholder="{{ __('Type Product ex: minuman,makanan,dll') }}" value="{{ old('type') ?? $typeProduct->type }}" maxlength="100" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Description')</label>

                        <div class="col-md-10">
                            <textarea class="form-control" name="desc" placeholder="{{ __('Description') }}" rows="3">{{ old('desc') ?? $typeProduct->desc }}</textarea>
                        </div>
                    </div>

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Type')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection