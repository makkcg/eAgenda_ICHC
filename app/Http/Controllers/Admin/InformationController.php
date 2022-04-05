<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InformationRequest;
use App\Models\Information;
use App\Repositories\Admin\InformationRepository;

class InformationController extends Controller
{
    private $informationRepository;

    public function __construct(InformationRepository $informationRepository)
    {
        $this->informationRepository = $informationRepository;
    }

    public function index()
    {
        return view('admin.information.index');
    }

    public function create()
    {
        return view('admin.information.create');
    }

    public function store(InformationRequest $request)
    {
        $this->informationRepository->create($request->validated());
        toast(trans('admin.new').' '.trans('admin.information').' '.trans('admin.added'),'success');

        return redirect()->route('admin.information.index');
    }

    public function edit(Information $information)
    {
        return view('admin.information.edit', compact('information'));
    }

    public function update(InformationRequest $request, Information $information)
    {
        $this->informationRepository->update($information, $request->validated());

        toast(trans('admin.information').' '.trans('admin.updated').' '.trans('admin.successfully'),'success');

        return redirect()->route('admin.information.index');
    }

    public function destroy(Information $information)
    {
        $this->informationRepository->delete($information);
        toast(trans('admin.information').' '.trans('admin.deleted').' '.trans('admin.successfully'),'success');

        return back();
    }
}
