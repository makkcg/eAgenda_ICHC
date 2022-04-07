<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.events') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.edit') .' '. __('admin.event') }}</x-slot>

    <form action="{{ route('admin.events.update', $event) }}" method="post">
        @csrf
        @method('put')
        @include('admin.events.form')
    </form>
</x-admin.layouts.card>
