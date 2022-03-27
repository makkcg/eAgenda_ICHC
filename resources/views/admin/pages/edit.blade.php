<x-admin.layouts.card>
    <x-slot name="title">{{ __('admin.pages') }}</x-slot>

    <x-slot name="pageTitle">{{ __('admin.pages') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.edit') .' '.$page->slug.' '. __('admin.page') }}</x-slot>

    <x-slot name="styles">
        <script type="text/javascript" src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
    </x-slot>

    <form action="{{ route('admin.pages.update', $page) }}" method="post">
        @csrf
        @method('put')
        @include('admin.pages.form')
    </form>
</x-admin.layouts.card>
