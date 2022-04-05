<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ChangePasswordRequest;
use App\Http\Requests\Api\ProfileRequest;
use App\Http\Resources\Auth\LoginResource;
use App\Traits\ApiResponseTrait;
use App\Traits\FileTrait;
use Illuminate\Support\Facades\Hash;

/**
 * @group User
 */
class UserController extends Controller
{
    use ApiResponseTrait, FileTrait;

    /**
     * Edit profile
     *
     * Edit user's profile.
     *
     * @param  ProfileRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateProfile(ProfileRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            self::deleteFile(auth()->user()->image);
            $data['image'] = self::uploadFile($request->image, 'users/');
        }
        auth()->user()->update($data);

        return $this->successMessage(new LoginResource(auth()->user()));
    }

    /**
     * Change password
     *
     * Change user's password.
     *
     * @param  ChangePasswordRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function changePassword(ChangePasswordRequest $request)
    {
        auth()->user()->update([
            'password' => Hash::make($request->new_password)
        ]);

        return $this->successMessage(new LoginResource(auth()->user()));
    }
}
