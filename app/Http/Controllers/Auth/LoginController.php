<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\AuthService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function __construct(private readonly AuthService $authService)
    {
    }

    public function create(): View
    {
        return view('modules.auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $this->authService->login(
            $request->validated('email'),
            $request->validated('password'),
            $request->boolean('remember'),
            $request->ip(),
        );

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard.index'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        $this->authService->logout($request);

        return redirect()->route('login');
    }
}