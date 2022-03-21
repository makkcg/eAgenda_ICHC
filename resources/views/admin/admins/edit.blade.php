<x-admin.layouts.master>
    <x-slot name="pageTitle">{{ __('admin.admins') }}</x-slot>

    <x-admin.includes.card cardHeader="{{ __('admin.edit') .' '. __('admin.admin') }}">
        <form action="{{ route('admin.admins.update', $admin) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <x-form.input name="name" value="{{ $admin->name }}">{{ __('admin.name') }}</x-form.input>
            <x-form.input type='email' name="email" value="{{ $admin->email }}" disabled>{{ __('admin.email') }}</x-form.input>
            <x-form.input name="phone_number" value="{{ $admin->phone_number }}">{{ __('admin.phone_number') }}</x-form.input>

            <div class="form-group">
                <label for="role">{{ __('admin.role') }}</label>
                <select name="role" name="role" id="role" class="form-control">
                    <option value="" selected>{{ __("admin.choose-role") }}</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->name }}" {{ $admin->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                    @endforeach
                </select>
                @error('role')
                <p class="help text-danger">{{ $errors->first('role') }}</p>
                @enderror
            </div>

            <x-form.file name="image" image="{{ $admin->image }}">{{ __('admin.upload') .' '. __('admin.image') }}</x-form.file>

            <x-form.submit redirectRoute="{{ route('admin.admins.index') }}">{{ __('admin.edit') }}</x-form.submit>
        </form>
    </x-admin.includes.card>

    <x-admin.includes.card cardHeader="{{ __('admin.change') .' '. __('admin.password') }}">
        <form action="{{ route('admin.admins.password', $admin) }}" method="post">
            @csrf

            <x-form.input type="password" name="password">{{ __('admin.new_password') }}</x-form.input>
            <x-form.input type="password" name="password_confirmation">{{ __('admin.confirm') .' '. __('admin.new_password') }}</x-form.input>

            <x-form.submit :cancel="false">{{ __('admin.change') }}</x-form.submit>
        </form>
    </x-admin.includes.card>
</x-admin.layouts.master>
