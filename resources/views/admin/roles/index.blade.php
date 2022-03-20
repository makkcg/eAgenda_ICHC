<x-admin.layouts.table>
    <x-slot name="pageTitle">{{ __('admin.roles') }}</x-slot>
    <x-slot name="cardHeader">
        {{ __('admin.roles') }}
        <a href="{{ route('admin.roles.create') }}" class="btn btn-secondary float-right"><i class="fas fa-plus"></i><span> {{ __('admin.add') }}</span></a>
    </x-slot>

    <x-slot name="tableHead">
        <th>{{ __('admin.name') }}</th>
    </x-slot>

    <x-slot name="tableBody">
        @foreach($roles as $role)
            <tr>
                <td>{{ $role->name }}</td>
                <td class="text-center">
                    <ul class="table-controls">
                        <li><a href="{{ route('admin.roles.edit', $role) }}" data-toggle="tooltip" data-placement="top" title="{{ __('admin.edit') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                        <form action="{{ route('admin.roles.destroy', $role) }}" method="post" class="d-inline-block">
                            @csrf
                            @method('delete')
                            <li><button type="submit" class="border-0 bg-transparent" onclick="return confirm('Are you sure you want to permanently delete {{ $role->name }}?')" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button></li>
                        </form>
                    </ul>
                </td>
            </tr>
        @endforeach
    </x-slot>

</x-admin.layouts.table>
