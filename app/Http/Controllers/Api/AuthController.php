<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\ForgotPasswordRequest;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Http\Requests\Api\Auth\SocialLoginRequest;
use App\Http\Resources\Auth\LoginResource;
use App\Repositories\Api\AuthRepository;
use App\Traits\ApiResponseTrait;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    use ApiResponseTrait;

    private $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->authRepository->register($request->validated());
        event(new Registered($user));

        return $this->successMessage(new LoginResource($user));
    }

    public function login(LoginRequest $request)
    {
        $user = $this->authRepository->login($request->validated());

        return $this->successMessage(new LoginResource($user));
    }

    public function forgotPassword(ForgotPasswordRequest $request)
    {
        $status = Password::sendResetLink($request->only('email'));
        if ($status === Password::RESET_LINK_SENT) {
            return $this->successMessage(json_decode ("{}"), trans("api/auth.reset_password_link_sent"), 200);
        }
        if ($status === Password::RESET_THROTTLED) {
            return $this->failureMessage(json_decode ("{}"), trans('api/auth.too_many_attempts_to_reset_password'), 429);
        }
    }

    public function socialLogin(SocialLoginRequest $request)
    {
        $user = $this->authRepository->socialLogin($request->validated());

        return $this->successMessage(new LoginResource($user), trans('api/auth.login_success'));
    }

    public function logout(Request $request)
    {
        $this->authRepository->logout();

        return $this->successMessage(json_decode ("{}"), trans('api/auth.logout_success'), 200);
    }
}
