<x-admin.layouts.master>
    <x-slot name="pageTitle">{{ __('admin.profile') }}</x-slot>

    <x-admin.includes.card cardHeader="{{ __('admin.edit') .' '. __('admin.profile') }}">
        <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <x-form.input name="name" value="{{ $admin->name }}">{{ __('admin.name') }}</x-form.input>
            <x-form.input type="email" name="email" value="{{ $admin->email }}" disabled>{{ __('admin.email') }}</x-form.input>
            <x-form.input type="text" name="phone_number" value="{{ $admin->phone_number }}">{{ __('admin.phone_number') }}</x-form.input>
            <x-form.file name="image" image="{{ isset($admin) ? $admin->image : '' }}">{{ __('admin.upload') .' '. __('admin.image') }}</x-form.file>

            <x-form.submit redirectRoute="{{ route('admin.profile.edit') }}">{{ __('admin.edit') }}</x-form.submit>
        </form>
    </x-admin.includes.card>

    <x-admin.includes.card cardHeader="{{ __('admin.change') .' '. __('admin.password') }}">
        <form action="{{ route('admin.profile.password') }}" method="post">
            @csrf

            <x-form.input type="password" name="password">{{ __('admin.password') }}</x-form.input>
            <x-form.input type="password" name="new_password">{{ __('admin.new_password') }}</x-form.input>
            <x-form.input type="password" name="new_password_confirmation">{{ __('admin.confirm') .' '. __('admin.password') }}</x-form.input>

            <x-form.submit :cancel="false">{{ __('admin.change') }}</x-form.submit>
        </form>
    </x-admin.includes.card>

</x-admin.layouts.master>
