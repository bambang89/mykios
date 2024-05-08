@inject('model', '\App\Domains\Auth\Models\User')
@extends('backend.layouts.app')

@section('title', __('Add Product Type'))

@section('content')
    <x-forms.post :action="route('admin.subtype.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create New Sub Type Items')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.subtype.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div x-data="{userType : '{{ $model::TYPE_USER }}'}">
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Type Product')</label>

                        <div class="col-md-10">
                            <select name="type_id" class="form-control" required x-on:change="userType = $event.target.value">
                                <option selected>Open this select menu</option>
                                @foreach ($typeProduct as $type)
                                    <option value="{{ $type->id }}">{{ $type->type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Sub Type Product')</label>

                        <div class="col-md-10">
                            <input type="text" name="sub_type" class="form-control" placeholder="{{ __('Sub Type Product ex: minuman,makanan,dll') }}" value="{{ old('type') }}" maxlength="100" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Description')</label>

                        <div class="col-md-10">
                            <textarea class="form-control" name="desc" placeholder="{{ __('Description') }}" rows="3">{{ old('desc') }}</textarea>
                        </div>
                    </div>

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create New')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection