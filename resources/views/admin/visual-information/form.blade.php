<x-form.input name="title" value="{{ isset($visualInformation) ? $visualInformation->title : null }}">{{ __('admin.title') }}</x-form.input>

<x-form.file name="icon" image="{{ isset($visualInformation) ? $visualInformation->icon_url : '' }}">{{ __('admin.upload') .' '. __('admin.icon') }}</x-form.file>
<x-form.file name="asset" image="{{ isset($visualInformation) ? $visualInformation->asset_url : '' }}">{{ __('admin.upload') .' '. __('admin.asset') }}</x-form.file>

<x-form.submit redirectRoute="{{ route('admin.visualInformation.index') }}">{{ isset($visualInformation) ? __('admin.edit') : __('admin.add') }}</x-form.submit>
