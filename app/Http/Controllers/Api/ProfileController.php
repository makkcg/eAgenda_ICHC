<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ProfileRequest;
use App\Http\Resources\Auth\LoginResource;
use App\Traits\ApiResponseTrait;
use App\Traits\FileTrait;

/**
 * @group User
 */
class ProfileController extends Controller
{
    use ApiResponseTrait, FileTrait;

    /**
     * Profile
     *
     * Edit user's profile.
     *
     * @param  ProfileRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(ProfileRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            self::deleteFile(auth()->user()->image);
            $data['image'] = self::uploadFile($request->image, 'users/');
        }
        auth()->user()->update($data);

        return $this->successMessage(new LoginResource(auth()->user()));
    }
}
