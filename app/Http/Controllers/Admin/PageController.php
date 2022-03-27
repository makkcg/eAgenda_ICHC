<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PageRequest;
use App\Models\Page;
use App\Repositories\Admin\PageRepository;

class PageController extends Controller
{
    private $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function index()
    {
        return view('admin.pages.index', [
            'pages' => Page::all(),
        ]);
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', [
            'page' => $page,
            'languages' => getActiveLanguages(),
        ]);
    }

    public function update(PageRequest $request, Page $page)
    {
        $this->pageRepository->update($page, $request->validated());

        toast(trans('admin.page').' '.trans('admin.updated').' '.trans('admin.successfully'),'success');

        return redirect()->route('admin.pages.index');
    }
}
