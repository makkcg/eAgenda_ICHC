<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.visual_information') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.add') .' '. __('admin.visual_information') }}</x-slot>

    <form action="{{ route('admin.visualInformation.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.visual-information.form')
    </form>
</x-admin.layouts.card>
