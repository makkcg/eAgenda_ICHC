<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.news') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.edit') .' '. __('admin.news') }}</x-slot>

    <form action="{{ route('admin.news.update', $news) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('admin.news.form')
    </form>
</x-admin.layouts.card>
