<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.news') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.add') .' '. __('admin.news') }}</x-slot>

    <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.news.form')
    </form>
</x-admin.layouts.card>
