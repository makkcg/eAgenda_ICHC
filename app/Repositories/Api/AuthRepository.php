<?php

namespace App\Repositories\Api;

use App\Models\User;
use App\Traits\ApiResponseTrait;
use App\Traits\FileTrait;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthRepository
{
    use ApiResponseTrait, FileTrait;

    /**
     * Register a new user.
     *
     * @param array $data
     * @return User
     */
    public function register(array $data)
    {
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->device_token = $data['device_token'] ?? null;
        $user->password = Hash::make($data['password']);
        $user->save();
        $user->access_token = $user->createToken('Cone')->plainTextToken;
        $user->save();

        return $user;
    }

    /**
     * Login user.
     *
     * @param array $data
     * @return User
     *
     * @throws HttpResponseException
     */
    public function login(array $data)
    {
        $this->authenticate();

        $user = request()->user();
        if (!empty($data['device_token'])) {
            $user->update(['device_token' => $data['device_token']]);
        }

        return $this->createNewToken($user);
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @return void
     *
     * @throws HttpResponseException
     */
    private function authenticate()
    {
        if (!auth()->attempt(request()->only(['email', 'password']))) {
            $response = $this->failureMessage(json_decode ("{}"), trans('api/auth.wrong_credentials'), 422);
            throw new HttpResponseException($response);
        }
    }

    /**
     * Create a new token for the user.
     *
     * @param User $user
     * @return User
     */
    public function createNewToken($user)
    {
        $user->access_token = $user->createToken('eAgenda')->plainTextToken;
        $user->save();

        return $user;
    }

    /**
     * Social media login ex. facebook, google, etc...
     *
     * @param array $data
     * @return User
     */
    public function socialLogin(array $data)
    {
        $user = User::where('email', $data['email'])->first();
        if ($user) {
            if (!empty($data['device_token'])) {
                $user->device_token = $data['device_token'];
            }

            $user->social_id = $data['social_id'];
            $user->save();
            return $this->createNewToken($user);
        }

        $data['password'] = Hash::make(Str::random(20));
        if ($data['image']) {
            $data['image'] = self::uploadFile($data['image'], 'users/');
        }

        return $this->createNewToken(User::create($data));
    }

    /**
     * Log out the currently logged-in user.
     */
    public function logout()
    {
        $user = auth()->user();
        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();
    }
}
