<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\NoteRequest;
use App\Http\Resources\NoteResource;
use App\Models\Note;
use App\Repositories\Api\NoteRepository;
use App\Traits\ApiResponseTrait;

/**
 * @group Notes
 */
class NoteController extends Controller
{
    use ApiResponseTrait;

    private $noteRepository;

    public function __construct(NoteRepository $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    /**
     * Notes
     *
     * Display a listing of the notes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successMessage([
            'notes' => NoteResource::collection(Note::where('user_id', auth()->user()->id)->latest()->get()),
        ]);
    }

    /**
     * Store Note
     *
     * Store a newly created Note in storage.
     *
     * @param  \App\Http\Requests\Api\NoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoteRequest $request)
    {
        $note = $this->noteRepository->create($request->validated());

        return $this->successMessage([
            'note' => new NoteResource($note)
        ], '', 201);
    }

    /**
     * Update note
     *
     * Update the specified note in storage.
     *
     * @param  \App\Http\Requests\Api\NoteRequest  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(NoteRequest $request, Note $note)
    {
        $note = $this->noteRepository->update($note, $request->validated());

        return $this->successMessage([
            'note' => new NoteResource($note)
        ]);
    }

    /**
     * Delete note
     *
     * Remove the specified note from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $this->noteRepository->delete($note);

        return $this->successMessage(json_decode('{}'), '', 204);
    }
}
