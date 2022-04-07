<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.events') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.add') .' '. __('admin.event') }}</x-slot>

    <form action="{{ route('admin.events.store') }}" method="post">
        @csrf
        @include('admin.events.form')
    </form>
</x-admin.layouts.card>
