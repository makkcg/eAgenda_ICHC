<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EventRequest;
use App\Models\Event;
use App\Repositories\Admin\EventRepository;

class EventController extends Controller
{
    private $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function index()
    {
        return view('admin.events.index');
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(EventRequest $request)
    {
        $this->eventRepository->create($request->validated());
        toast(trans('admin.new').' '.trans('admin.event').' '.trans('admin.added'),'success');

        return redirect()->route('admin.events.index');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(EventRequest $request, Event $event)
    {
        $this->eventRepository->update($event, $request->validated());

        toast(trans('admin.event').' '.trans('admin.updated').' '.trans('admin.successfully'),'success');

        return redirect()->route('admin.events.index');
    }

    public function destroy(Event $event)
    {
        $this->eventRepository->delete($event);
        toast(trans('admin.event').' '.trans('admin.deleted').' '.trans('admin.successfully'),'success');

        return back();
    }
}
