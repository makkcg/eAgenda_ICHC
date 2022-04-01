<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.app_labels') }}</x-slot>
    <x-slot name="cardHeader">
        <a href="{{ route('admin.appLabels.create') }}" class="btn btn-secondary"><i class="fas fa-plus"></i><span class="mx-2"> {{ __('admin.add') .' '. __('admin.app_label') }}</span></a>
    </x-slot>

    <form action="{{ route('admin.appLabels.delete-all') }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger float-right mb-2" onclick="return confirm('Are you sure you want to permanently delete all records?')"><i class="fas fa-trash"></i><span class="mx-2"> {{ __('admin.delete') .' '. __('admin.all') }}</span></button>
    </form>

    <x-slot name="styles">
        @livewireStyles
        @powerGridStyles
    </x-slot>

    <x-import-form route="{{ route('admin.appLabels.import') }}" templateFile="{{ route('admin.appLabels.template') }}"/>

    <livewire:app-labels-table/>

    <x-slot name="scripts">
        <script src="{{ asset('admin-assets/powergrid-assets/jquery-3.6.0.slim.min.js') }}"></script>
        <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js') }}"></script>

        @livewireScripts
        @powerGridScripts
    </x-slot>
</x-admin.layouts.card>
