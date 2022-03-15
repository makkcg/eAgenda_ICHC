<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.profile') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.edit') .' '. __('admin.profile') }}</x-slot>

    <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

        <x-form.input name="name" value="{{ $admin->name }}">{{ __('admin.name') }}</x-form.input>
        <x-form.input type="email" name="email" value="{{ $admin->email }}" disabled>{{ __('admin.email') }}</x-form.input>
        <x-form.input type="text" name="phone_number" value="{{ $admin->phone_number }}">{{ __('admin.phone_number') }}</x-form.input>
        <x-form.file name="image" image="{{ isset($admin) ? $admin->image : '' }}">{{ __('admin.upload') .' '. __('admin.image') }}</x-form.file>

        <x-form.submit redirectRoute="{{ route('admin.profile.edit') }}">{{ __('admin.edit') }}</x-form.submit>

        {{--        <x-form.input type="password" name="password">{{ __('admin.password') }}</x-form.input>--}}
        {{--        <x-form.input type="password" name="new_password">{{ __('admin.new_password') }}</x-form.input>--}}
        {{--        <x-form.input type="password" name="new_password_confirmation">{{ __('admin.confirm') .' '. __('admin.password') }}</x-form.input>--}}

    </form>
</x-admin.layouts.card>
