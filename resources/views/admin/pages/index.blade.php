<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.pages') }}</x-slot>
    <x-slot name="cardHeader">
        {{ __('admin.pages') }}
    </x-slot>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>{{ __('admin.id') }}</th>
            <th>{{ __('admin.slug') }}</th>
            <th>{{ __('admin.action') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->slug }}</td>
                <td class="text-center">
                    <a href="{{ route('admin.pages.edit', $page) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="{{ __('admin.edit') }}">{{ __('admin.edit') }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</x-admin.layouts.card>
