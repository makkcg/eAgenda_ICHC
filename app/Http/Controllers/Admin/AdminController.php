<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Admin\ChangePasswordRequest;
use App\Http\Requests\Admin\Admin\StoreRequest;
use App\Http\Requests\Admin\Admin\UpdateRequest;
use App\Models\Admin;
use App\Repositories\Admin\AdminRepository;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    private $adminRepository;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function index()
    {
        return view('admin.admins.index');
    }

    public function create()
    {
        return view('admin.admins.create', [
            'roles' => Role::where('name', '!=', 'super-admin')->get(),
        ]);
    }

    public function store(StoreRequest $request)
    {
        $this->adminRepository->create($request->validated());
        toast(trans('admin.new').' '.trans('admin.admin').' '.trans('admin.added'),'success');

        return redirect()->route('admin.admins.index');
    }

    public function edit(Admin $admin)
    {
        return view('admin.admins.edit', [
            'admin' => $admin,
            'roles' => Role::where('name', '!=', 'super-admin')->get(),
        ]);
    }

    public function update(UpdateRequest $request, Admin $admin)
    {
        $this->adminRepository->update($admin, $request->validated());

        toast(trans('admin.admin').' '.trans('admin.updated').' '.trans('admin.successfully'),'success');

        return redirect()->route('admin.admins.index');
    }

    public function destroy(Admin $admin)
    {
        $this->adminRepository->delete($admin);
        toast(trans('admin.admin').' '.trans('admin.deleted').' '.trans('admin.successfully'),'success');

        return back();
    }

    public function changePassword(ChangePasswordRequest $request, Admin $admin)
    {
        $this->adminRepository->changePassword($admin, $request->validated());
        toast(trans('admin.password').' '.trans('admin.changed').' '.trans('admin.successfully'),'success');

        return back();
    }
}
