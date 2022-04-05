<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.information_bank') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.edit') .' '. __('admin.information') }}</x-slot>

    <x-slot name="styles">
        <script type="text/javascript" src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
    </x-slot>

    <form action="{{ route('admin.information.update', $information) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('admin.information.form')
    </form>
</x-admin.layouts.card>
