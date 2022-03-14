@if(!empty($images))
    <div class="m-2">
        @foreach($images as $image)
            <img class="rounded d-inline-block mx-1" height="80px" src="{{ asset($image) }}"/>
        @endforeach
    </div>
@endif

<div {{ $attributes->merge(['class' => 'form-group']) }}>
    @if($label)
        <label for="{{ $name }}">{{ $slot }}</label>
    @endif
    <input type="file" name="{{ $name.'[]' }}" id="{{ $name }}" multiple>

    @error($name)
    <p class="help text-danger">{{ $errors->first($name) }}</p>
    @enderror
</div>
