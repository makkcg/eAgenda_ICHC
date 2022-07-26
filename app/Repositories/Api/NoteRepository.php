<?php

namespace App\Repositories\Api;

use App\Models\Note;
use App\Traits\ApiResponseTrait;
use App\Traits\FileTrait;
use Illuminate\Http\Exceptions\HttpResponseException;

class NoteRepository
{
    use ApiResponseTrait, FileTrait;

    public function create($data)
    {
        $data['user_id'] = auth()->user()->id;
        $note = Note::create($data);

        if (!empty($data['files'])) {
            self::uploadFiles($data['files'], $note, 'notes/');
        }

        return $note;
    }

    public function update($note, $data)
    {
        $this->checkIfNoteOwner($note);
        $note->update($data);

        if (!empty($data['files'])) {
            self::deleteFiles($note->files());
            self::uploadFiles($data['files'], $note, 'notes/');
        }

        return $note;
    }

    public function delete($note)
    {
        $this->checkIfNoteOwner($note);
        self::deleteFiles($note->files());
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
