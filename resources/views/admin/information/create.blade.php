<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.information_bank') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.add') .' '. __('admin.information') }}</x-slot>

    <x-slot name="styles">
        <script type="text/javascript" src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
    </x-slot>

    <form action="{{ route('admin.information.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.information.form')
    </form>
</x-admin.layouts.card>
