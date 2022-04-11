<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.visual_information') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.edit') .' '. __('admin.visual_information') }}</x-slot>

    <form action="{{ route('admin.visualInformation.update', $visualInformation) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('admin.visual-information.form')
    </form>
</x-admin.layouts.card>
