<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\TagRequest;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Exceptions\HttpResponseException;

/**
 * @group Tags
 */
class TagController extends Controller
{
    use ApiResponseTrait;

    /**
     * Tags
     *
     * Display a listing of the user's tags.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successMessage([
            'tags' => TagResource::collection(Tag::where('user_id', auth()->user()->id)->get()),
        ]);
    }

    /**
     * Store tag
     *
     * Store a newly created tag.
     *
     * @param  TagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $tag = Tag::create($data);

        return $this->successMessage([
            'tag' => new TagResource($tag)
        ], '', 201);
    }

    /**
     * Update tag
     *
     * Update the specified tag in storage.
     *
     * @param  TagRequest  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, Tag $tag)
    {
        $this->checkIfOwner($tag);
        $tag->update($request->validated());

        return $this->successMessage([
            'tag' => new TagResource($tag)
        ]);
    }

    /**
     * Delete tag
     *
     * Remove the specified tag from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $this->checkIfOwner($tag);
        $tag->delete();

        return $this->successMessage(json_decode('{}'), '', 204);
    }

    private function checkIfOwner($tag)
    {
        if ($tag->user_id == auth()->user()->id) {
            return;
        }
        throw new HttpResponseException($this->failureMessage(json_decode('{}'), trans('api/main.access_denied'), 403));
    }
}
