<div {{ $attributes->merge(['class' => 'form-group']) }}>
    @if($label)
        <label for="{{ $name }}">{{ $slot }}</label>
    @endif
    <input type="{{ $type }}" class="form-control {{ $inputClass }} @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}"
           placeholder="{{ $slot }}" value="{{ $value ?? old($name) }}" {{ $attributes }}>

    @error($name)
    <p class="help text-danger">{{ $errors->first($name) }}</p>
    @enderror
</div>
