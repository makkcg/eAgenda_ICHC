<x-form.input name="name" value="{{ isset($role) ? $role->name : null }}">{{ __('admin.name') }}</x-form.input>

<x-slot name="styles">
    <link rel="stylesheet" href="{{ asset('admin-assets/plugins/select2/css/select2.min.css') }}">
</x-slot>

<div class="select2-purple mb-3">
    <label for="permissions">{{ __('admin.permissions') }}</label>
    <select name="permissions[]" id="permissions" class="select2 @error("permissions") is-invalid @enderror" data-dropdown-css-class="select2-purple" style="width: 100%;" multiple>
        @foreach($permissions as $permission)
            <option value="{{ $permission->id }}"
                @if(isset($role->permissions))
                    @foreach($role->permissions as $perm){{ $perm->id == $permission->id ? 'selected': '' }}@endforeach
                @endif>{{ $permission->name }}</option>
        @endforeach
    </select>
    @error("permissions")
    <p class="help text-danger">{{ $errors->first("permissions") }}</p>
    @enderror
</div>

<x-form.submit redirectRoute="{{ route('admin.roles.index') }}">{{ isset($role) ? __('admin.edit') : __('admin.add') }}</x-form.submit>
