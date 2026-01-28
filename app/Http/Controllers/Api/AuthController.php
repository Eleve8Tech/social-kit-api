<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Http\Resources\UserResource;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    protected $service;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    public function register(RegisterRequest $request)
    {
        $data = $this->service->register($request->validated());

        return $this->response([
            'user' => new UserResource($data['user']),
            'access_token' => $data['access_token'],
            'token_type' => $data['token_type'],
        ], 'User registered successfully', 201);
    }

    public function login(LoginRequest $request)
    {
        $data = $this->service->login($request->validated());

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials',
            ], 401);
        }

        return $this->response([
            'user' => new UserResource($data['user']),
            'access_token' => $data['access_token'],
            'token_type' => $data['token_type'],
        ], 'Login successful');
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return $this->response([], 'Logged out successfully');
    }

    public function forgotPassword(ForgotPasswordRequest $request)
    {
        $status = $this->service->forgotPassword($request->email);

        if ($status) {
            return $this->response([], 'Reset link sent to your email');
        }

        return response()->json([
            'success' => false,
            'message' => 'Unable to send reset link',
        ], 500);
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        $status = $this->service->resetPassword($request->validated());

        if ($status) {
            return $this->response([], 'Password reset successfully');
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid token or email',
        ], 400);
    }

    public function redirect()
    {
        return Socialite::driver('facebook')
            ->scopes([
                "pages_show_list",
                "pages_read_engagement",
                "pages_manage_posts",
                "pages_manage_engagement",
                "pages_read_user_content",
                "public_profile",
            ])
            ->redirect();
    }

    public function callback()
    {
        $fbUser = Socialite::driver('facebook')->user();


        $token = Str::random(40);

        return json_encode([
            'token' => $token,
            'user' => $fbUser
        ]);

        return redirect("myapp://auth?token={$token}");
    }
}
