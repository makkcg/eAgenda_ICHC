<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.app_labels') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.add') .' '. __('admin.app_label') }}</x-slot>

    <form action="{{ route('admin.appLabels.store') }}" method="post">
        @csrf
        @include('admin.appLabels.form')
    </form>
</x-admin.layouts.card>
