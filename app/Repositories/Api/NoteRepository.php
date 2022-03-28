<?php

namespace App\Repositories\Api;

use App\Models\Note;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Exceptions\HttpResponseException;

class NoteRepository
{
    use ApiResponseTrait;

    public function create($data)
    {
        $data['user_id'] = auth()->user()->id;
        $note = Note::create($data);

        return $note;
    }

    public function update($note, $data)
    {
        $this->checkIfNoteOwner($note);
        $note->update($data);

        return $note;
    }

    public function delete($note)
    {
        $this->checkIfNoteOwner($note);
        $note->delete();
    }

    private function checkIfNoteOwner($note)
    {
        if ($note->user_id == auth()->user()->id) {
            return;
        }
        throw new HttpResponseException($this->failureMessage(json_decode('{}'), trans('api/main.access_denied'), 403));
    }
}
