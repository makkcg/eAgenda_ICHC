<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoleRequest;
use App\Repositories\Admin\RoleRepository;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    private $roleRepository;

    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.roles.create', [
            'permissions' => Permission::all(),
        ]);
    }

    public function store(RoleRequest $request)
    {
        $this->roleRepository->create($request->validated());
        toast(trans('admin.new').' '.trans('admin.role').' '.trans('admin.added'),'success');

        return redirect()->route('admin.roles.index');
    }

    public function edit(Role $role)
    {
        $this->exceptSuperAdmin($role);

        return view('admin.roles.edit', [
            'role' => $role,
            'permissions' => Permission::all(),
        ]);
    }

    public function update(RoleRequest $request, Role $role)
    {
        $this->exceptSuperAdmin($role);
        $this->roleRepository->update($role, $request->validated());

        toast(trans('admin.role').' '.trans('admin.updated').' '.trans('admin.successfully'),'success');

        return redirect()->route('admin.roles.index');
    }

    public function destroy(Role $role)
    {
        $this->exceptSuperAdmin($role);
        $this->roleRepository->delete($role);
        toast(trans('admin.role').' '.trans('admin.deleted').' '.trans('admin.successfully'),'success');

        return back();
    }

    private function exceptSuperAdmin($role)
    {
        if ($role->name == 'super-admin')
            abort(403, "Super Admin role can't be modified");
    }
}
