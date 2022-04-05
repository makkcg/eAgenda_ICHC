<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.users') }}</x-slot>

    <x-slot name="styles">
        @livewireStyles
        @powerGridStyles
    </x-slot>

    <livewire:users-table/>

    <x-slot name="scripts">
        <script src="{{ asset('admin-assets/powergrid-assets/jquery-3.6.0.slim.min.js') }}"></script>
        <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js') }}"></script>

        @livewireScripts
        @powerGridScripts
    </x-slot>
</x-admin.layouts.card>
