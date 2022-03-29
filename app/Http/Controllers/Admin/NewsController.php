<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsRequest;
use App\Models\News;
use App\Repositories\Admin\NewsRepository;

class NewsController extends Controller
{
    private $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function index()
    {
        return view('admin.news.index');
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(NewsRequest $request)
    {
        $this->newsRepository->create($request->validated());
        toast(trans('admin.new').' '.trans('admin.news').' '.trans('admin.added'),'success');

        return redirect()->route('admin.news.index');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(NewsRequest $request, News $news)
    {
        $this->newsRepository->update($news, $request->validated());

        toast(trans('admin.news').' '.trans('admin.updated').' '.trans('admin.successfully'),'success');

        return redirect()->route('admin.news.index');
    }

    public function destroy(News $news)
    {
        $this->newsRepository->delete($news);
        toast(trans('admin.news').' '.trans('admin.deleted').' '.trans('admin.successfully'),'success');

        return back();
    }
}
