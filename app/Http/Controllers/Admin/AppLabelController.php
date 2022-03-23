<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AppLabelRequest;
use App\Models\AppLabel;
use App\Models\Language;
use App\Repositories\Admin\AppLabelRepository;
use Illuminate\Http\Request;

class AppLabelController extends Controller
{
    private $appLabelRepository;

    public function __construct(AppLabelRepository $appLabelRepository)
    {
        $this->appLabelRepository = $appLabelRepository;
    }

    public function index()
    {
        return view('admin.appLabels.index');
    }

    public function create()
    {
        return view('admin.appLabels.create', [
            'languages' => Language::where('status', 1)->get(),
        ]);
    }

    public function store(AppLabelRequest $request)
    {
        $this->appLabelRepository->create($request->all());
        toast(trans('admin.new').' '.trans('admin.app_label').' '.trans('admin.added'),'success');

        return redirect()->route('admin.appLabels.index');
    }

    public function edit(AppLabel $appLabel)
    {
        return view('admin.appLabels.edit', [
            'appLabel' => $appLabel,
            'languages' => Language::where('status', 1)->get(),
        ]);
    }

    public function update(AppLabelRequest $request, AppLabel $appLabel)
    {
        $this->appLabelRepository->update($appLabel, $request->validated());

        toast(trans('admin.admin').' '.trans('admin.updated').' '.trans('admin.successfully'),'success');

        return redirect()->route('admin.appLabels.index');
    }

//    public function destroy(Admin $admin)
//    {
//        $this->adminRepository->delete($admin);
//        toast(trans('admin.admin').' '.trans('admin.deleted').' '.trans('admin.successfully'),'success');
//
//        return back();
//    }

//    public function changePassword(ChangePasswordRequest $request, Admin $admin)
//    {
//        $this->adminRepository->changePassword($admin, $request->validated());
//        toast(trans('admin.password').' '.trans('admin.changed').' '.trans('admin.successfully'),'success');
//
//        return back();
//    }
}
