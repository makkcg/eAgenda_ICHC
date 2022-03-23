<x-form.input name="key" value="{{ isset($appLabel) ? $appLabel->key : null }}">{{ __('admin.key') }}</x-form.input>

<div class="">
    <div class="card">
        <div class="card-header p-2">
            <ul class="nav nav-pills">
                @foreach($languages as $language)
                    <li class="nav-item"><a class="nav-link {{ $loop->first ? 'active' : '' }}" href="#{{ 'locale_'.$language->code }}" data-toggle="tab">{{ $language->name.' ( '. $language->code .' )' }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                {{ dd($appLabel->translations) }}
                @foreach($languages as $language)
                    <div class="{{ $loop->first ? 'active' : '' }} tab-pane" id="{{ 'locale_'.$language->code }}">
                        <x-form.textarea name="{{ 'lang['.$language->code.'][value]' }}" inputClass="{{ $errors->has('lang.'.$language->code.'.value') ? 'is-invalid' : ''}}"
                                         rows="3" maxlength="255" value="{{ isset($appLabel) ? $appLabel->translate($language->code)->value ?? '' : null }}" required>{{ __('admin.value') }}</x-form.textarea>

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
