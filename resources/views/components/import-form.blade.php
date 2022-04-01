<form action="{{ $route }}" method="POST" enctype="multipart/form-data">
    @csrf

    @if(!empty($templateFile))
        <a href="{{ $templateFile }}" class="btn btn-secondary mr-2" download><i class="fas fa-download mr-2"></i> {{ __('admin.download') .' '. __('admin.template') }}</a>
    @endif

    <x-form.submit  class="d-inline-block mr-3" :cancel="false">{{ __('admin.import') }}</x-form.submit>
    <x-form.file name="file" class="d-inline-block">{{ __('admin.upload') .' '. __('admin.excel') }}</x-form.file>
</form>

@if(session()->has('errors'))
    @foreach(session('errors')->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif
