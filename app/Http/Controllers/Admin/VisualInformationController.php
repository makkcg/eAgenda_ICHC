<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\VisualInformationRequest;
use App\Models\VisualInformation;
use App\Repositories\Admin\VisualInformationRepository;

class VisualInformationController extends Controller
{
    private $visualInformationRepository;

    public function __construct(VisualInformationRepository $visualInformationRepository)
    {
        $this->visualInformationRepository = $visualInformationRepository;
    }

    public function index()
    {
        return view('admin.visual-information.index');
    }

    public function create()
    {
        return view('admin.visual-information.create');
    }

    public function store(VisualInformationRequest $request)
    {
        $this->visualInformationRepository->create($request->validated());
        toast(trans('admin.new').' '.trans('admin.visual_information').' '.trans('admin.added'),'success');

        return redirect()->route('admin.visualInformation.index');
    }

    public function edit(VisualInformation $visualInformation)
    {
        return view('admin.visual-information.edit', compact('visualInformation'));
    }

    public function update(VisualInformationRequest $request, VisualInformation $visualInformation)
    {
        $this->visualInformationRepository->update($visualInformation, $request->validated());

        toast(trans('admin.visual_information').' '.trans('admin.updated').' '.trans('admin.successfully'),'success');

        return redirect()->route('admin.visualInformation.index');
    }

    public function destroy(VisualInformation $visualInformation)
    {
        $this->visualInformationRepository->delete($visualInformation);
        toast(trans('admin.visual_information').' '.trans('admin.deleted').' '.trans('admin.successfully'),'success');

        return back();
    }
}
