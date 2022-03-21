<x-admin.layouts.card>
    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/plugins/select2/select2.min.css') }}">
    </x-slot>

    <x-slot name="pageTitle">{{ __('admin.roles') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.add') .' '. __('admin.role') }}</x-slot>

    <form action="{{ route('admin.roles.store') }}" method="post">
        @csrf
        @include('admin.roles.form')
    </form>

    <x-slot name="scripts">
        <script src="{{ asset('admin-assets/plugins/select2/js/select2.full.min.js') }}"></script>

        <script>
            $(function () {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
            })
        </script>
    </x-slot>
</x-admin.layouts.card>
