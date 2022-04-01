<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.app_labels') }}</x-slot>
    <x-slot name="cardHeader">
        <a href="{{ route('admin.appLabels.create') }}" class="btn btn-secondary float-right"><i class="fas fa-plus"></i><span class="mx-2"> {{ __('admin.add') .' '. __('admin.app_label') }}</span></a>
    </x-slot>

    <x-slot name="styles">
        @livewireStyles
        @powerGridStyles
    </x-slot>

    <x-import-form route="{{ route('admin.appLabels.import') }}" templateFile="{{ asset('admin-assets/import-templates/appLabels.xlsx') }}"/>

    <livewire:app-labels-table/>

    <x-slot name="scripts">
        <script src="{{ asset('admin-assets/powergrid-assets/jquery-3.6.0.slim.min.js') }}"></script>
        <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js') }}"></script>

        @livewireScripts
        @powerGridScripts
    </x-slot>
</x-admin.layouts.card>
