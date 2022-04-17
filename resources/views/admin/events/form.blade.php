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
                                      value="{{ isset($event) ? $event->translateOrDefault($language->code)->title ?? '' : null }}" required>{{ __('admin.title') }}</x-form.input>

                        <x-form.textarea name="{{ 'lang['.$language->code.'][body]' }}" inputClass="{{ $errors->has('lang.'.$language->code.'.body') ? 'is-invalid' : ''}}"
                                         :ckEditor="true" value="{{ isset($event) ? $event->translateOrDefault($language->code)->body ?? '' : null }}" required>{{ __('admin.body') }}</x-form.textarea>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<x-form.input type="color" name="color" value="{{ isset($event) ? $event->color : '' }}" required>{{ __('admin.color') }}</x-form.input>
<x-form.input type="date" name="start_date" value="{{ isset($event) ? $event->start_date : '' }}" required>{{ __('admin.start') .' '. __('admin.date') }}</x-form.input>
<x-form.input type="time" name="start_time" value="{{ isset($event) ? \Carbon\Carbon::parse($event->start_time)->format('H:i') : '' }}" required>{{ __('admin.start') .' '. __('admin.time') }}</x-form.input>
<x-form.input type="date" name="end_date" value="{{ isset($event) ? $event->end_date : '' }}" required>{{ __('admin.end') .' '. __('admin.date') }}</x-form.input>
<x-form.input type="time" name="end_time" value="{{ isset($event) ? \Carbon\Carbon::parse($event->end_time)->format('H:i') : '' }}" required>{{ __('admin.start') .' '. __('admin.time') }}</x-form.input>

<x-form.submit redirectRoute="{{ route('admin.events.index') }}">{{ isset($event) ? __('admin.edit') : __('admin.add') }}</x-form.submit>
