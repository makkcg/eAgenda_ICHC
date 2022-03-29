<div class="">
    <div class="card">
        <div class="card-header p-2">
            <ul class="nav nav-pills">
                @foreach(getActiveLanguages() as $language)
                    <li class="nav-item"><a class="nav-link {{ $loop->first ? 'active' : '' }}" href="#{{ 'locale_'.$language->code }}" data-toggle="tab">{{ $language->name.' ( '. $language->code .' )' }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                @foreach(getActiveLanguages() as $language)
                    <div class="{{ $loop->first ? 'active' : '' }} tab-pane" id="{{ 'locale_'.$language->code }}">
                        <x-form.input name="{{ 'lang['.$language->code.'][title]' }}" inputClass="{{ $errors->has('lang.'.$language->code.'.title') ? 'is-invalid' : ''}}"
                                      value="{{ isset($news) ? $news->translateOrDefault($language->code)->title ?? '' : null }}" required>{{ __('admin.title') }}</x-form.input>

                        <x-form.textarea name="{{ 'lang['.$language->code.'][body]' }}" inputClass="{{ $errors->has('lang.'.$language->code.'.body') ? 'is-invalid' : ''}}"
                                         rows="3" maxlength="255" value="{{ isset($news) ? $news->translateOrDefault($language->code)->body ?? '' : null }}" required>{{ __('admin.body') }}</x-form.textarea>

                        {{--                        @error('lang.'.$locale.'.value')--}}
{{--                        <p class="help text-danger">{{ $errors->first('lang.'.$locale.'.value') }}</p>--}}
{{--                        @enderror--}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<x-form.file name="image" image="{{ isset($news) ? $news->image : '' }}">{{ __('admin.upload') .' '. __('admin.image') }}</x-form.file>

<x-form.submit redirectRoute="{{ route('admin.news.index') }}">{{ isset($news) ? __('admin.edit') : __('admin.add') }}</x-form.submit>
