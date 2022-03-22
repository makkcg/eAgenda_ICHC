<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.app_labels') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.edit') .' '. __('admin.app_label') }}</x-slot>

    <form action="{{ route('admin.appLabels.update', $appLabel) }}" method="post">
        @csrf
        @method('put')
        @include('admin.appLabels.form')
    </form>
</x-admin.layouts.card>
