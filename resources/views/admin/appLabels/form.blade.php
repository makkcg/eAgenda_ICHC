<x-form.input name="key" value="{{ isset($appLocale) ? $appLocale->key : null }}">{{ __('admin.key') }}</x-form.input>

<div class="">
    <div class="card">
        <div class="card-header p-2">
            <ul class="nav nav-pills">
                @foreach(config('translatable.locales') as $locale)
                    <li class="nav-item"><a class="nav-link {{ $loop->first ? 'active' : '' }}" href="#{{ 'locale_'.$locale }}" data-toggle="tab">{{ '( '. strtoupper($locale) .' )' }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                @foreach(config('translatable.locales') as $locale)
                    <div class="{{ $loop->first ? 'active' : '' }} tab-pane" id="{{ 'locale_'.$locale }}">
                        <x-form.textarea name="{{ 'lang['.$locale.'][value]' }}" inputClass="{{ $errors->has('lang.'.$locale.'.value') ? 'is-invalid' : ''}}"
                                         rows="3" maxlength="255" value="{{ isset($appLocale) ? $appLocale->translate($locale)->value : null }}" required>{{ __('admin.value') }}</x-form.textarea>

{{--                        @error('lang.'.$locale.'.value')--}}
{{--                        <p class="help text-danger">{{ $errors->first('lang.'.$locale.'.value') }}</p>--}}
{{--                        @enderror--}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<x-form.submit redirectRoute="{{ route('admin.appLabels.index') }}">{{ isset($appLabel) ? __('admin.edit') : __('admin.add') }}</x-form.submit>
